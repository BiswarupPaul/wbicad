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

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['post_order_no'])) {
    $post_order_no   = $_POST['post_order_no'];

    // Debugging: Log the received post_order_no    
    file_put_contents('debug.log', "Received post_order_no  : " . print_r($post_order_no  , true) . "\n", FILE_APPEND);

    $dsn = 'mysql:host=localhost;dbname=wbicad_db'; // Database connection
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Loop through the post order IDs and update the database
        foreach ($post_order_no  as $index => $id) {
            $stmt = $pdo->prepare("UPDATE " . EVENTS . " SET post_order_no = :order WHERE ID = :id");
            $stmt->execute([
                ':order' => $index + 1,  // Use index + 1 for the order number
                ':id' => $id
            ]);

            // Debugging: Log the updated ID and its new order number
            file_put_contents('debug.log', "Updated ID: {$id}, New Order: " . ($index + 1) . "\n", FILE_APPEND);
        }

        // If everything went well
        $response['success'] = true;
        $response['message'] = 'Order updated successfully.';
    } catch (PDOException $e) {
        // Log the error
        $response['message'] = 'Database error: ' . $e->getMessage();
        file_put_contents('debug.log', "Database error: " . $e->getMessage() . "\n", FILE_APPEND);
    }
}

// Return JSON response
echo json_encode($response);
