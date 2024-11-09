<?php 
include '../../wb-admin/autoloader.php';

function generate_slug($string ) {
    $string = strtolower($string);
    $string = preg_replace('/[^a-z0-9_\s-]/', '', $string);
    $string = preg_replace('/[\s-]+/', ' ', $string);
    $string = preg_replace('/[\s_]/', '-', $string);
    return $string;
}

function get_event_by_slug($allevent, $slug) {
    foreach ($allevent as $event) {
        if (generate_slug($event['title']) === $slug) {
            return $event;
        }
    }
    return null; // Event not found
}

$allevent = $Common->get_post(EVENTS);

$slug = basename($_SERVER['REQUEST_URI']);

$slug = $_GET['slug'];

$event = get_event_by_slug($allevent, $slug);

if (!$event) {
    // Event not found, you can handle this case accordingly
    echo "Event not found!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $event['title']; ?> - Event Details</title>
    <!-- Include your header -->
    <?php include '../../include/header.php' ?>
</head>
<body>
    <!-- Include your navigation -->
    <?php include '../../include/navigation.php' ?>
    
    <div class="innerpage">
    <!-- Event -->
    <section class="sectiongap">
        <div class="container">
                


                    
        <div class="row justify-content-center cms-wrap mb-4" id="events_details">
            <div class="container">
                <h4><?php echo $event['title']; ?></h4>       

                <ul class="list-inline mb-2">
                    <li class="list-inline-item"><i class="fa-solid fa-calendar-days"></i> <?php echo $event['event_date']; ?></li>
                    <li class="list-inline-item"><i class="fa-solid fa-location-dot"></i><?php echo $event['venue']; ?></li>
                </ul>
                       <?php  if($event['content']) : ?>
                     <?php echo $event['content']; ?>

                   <?php  endif; ?>
                
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-4">

<?php 
$i=1;
$gallery_images = unserialize($event['gallery_image']);
foreach ($gallery_images as $image_url) : ?>
                <div class="col mb-4">
                        <a class="post-box" data-fancybox="gallery-recent" href="<?php echo ASSET_URL . $image_url; ?>" data-caption="<?php echo $event['title']; ?>">
                            <div class="photo-item mb-1">
                                <div class="photo-img">
                                <img src="<?php echo ASSET_URL . $image_url; ?>"
                                        class="img-fluid cropped-image cover-image" alt="...">
                                    <div class="photo-date">
                                        <div class="photo-icon">
                                            <i class="fas fa-search-plus"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="view_title"><?php echo $event['title']; ?> - <?=$i; ?></div>
                            </div>
                        </a>
                    </div>

<?php 
$i++;

endforeach; ?>
                    
            
        
                </div>
                
                
            </div>
        </div>
                


        </div>
    </section>
    <!-- /Event -->
</div>


    
    <?php include '../../include/footer.php' ?>
</body>
</html>