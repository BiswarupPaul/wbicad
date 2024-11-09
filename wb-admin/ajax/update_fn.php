<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Access-Control-Allow-Credentials: true");

include('../autoloader.php');
header('Content-Type: application/json');

$response = ['success' => false, 'message' => 'An error occurred'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['post_data'])) {
    $post_data = $_POST['post_data'];

    // Debugging: Log the received post_data
    file_put_contents('debug.log', "Received post_data: " . print_r($post_data, true) . "\n", FILE_APPEND);

    $dsn = 'mysql:host=localhost;dbname=wbicad_db'; // Example for local database
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Start a transaction to ensure all updates are committed
        $pdo->beginTransaction();

        // Loop through the post data and update each post's details
        foreach ($post_data as $post) {
            // Prepare the SQL query to update the post data (title, category, date, etc.)
            $stmt = $pdo->prepare("UPDATE " . EVENTS . " SET post_order_no = :order, title = :title, event_id = :event_id, created_date = :created_date, status = :status WHERE ID = :id");
            $stmt->execute([
                ':order' => $post['order'],  // New order number
                ':title' => $post['title'],  // Title
                ':event_id' => $post['event_id'],  // Event category
                ':created_date' => $post['created_date'],  // Published date
                ':status' => $post['status'],  // Status (Active/Deactive)
                ':id' => $post['id']  // Post ID
            ]);

            // Debugging: Log the updated post details
            file_put_contents('debug.log', "Updated ID: {$post['id']}, Order: {$post['order']}, Title: {$post['title']}\n", FILE_APPEND);
        }

        // Commit the transaction
        $pdo->commit();

        // If everything went well
        $response['success'] = true;
        $response['message'] = 'Posts updated successfully.';
    } catch (PDOException $e) {
        // In case of an error, rollback the transaction
        $pdo->rollBack();

        // Log the error
        $response['message'] = 'Database error: ' . $e->getMessage();
        file_put_contents('debug.log', "Database error: " . $e->getMessage() . "\n", FILE_APPEND);
    }
}

// Return JSON response
echo json_encode($response);
