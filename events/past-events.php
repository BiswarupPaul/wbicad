<?php
include '../wb-admin/autoloader.php';
$ecategory = $Common->get_post(ECATEGORY); 
$filterby = $ecategory[1]['ID']; 

$allevent = $Common->get_post(EVENTS);
$upcomingevents = array_filter($allevent, function ($var) {
    return ($var['event_id'] == 1);
});
?>


<!DOCTYPE html>
<html lang="en">
    <head>
       
       <title>Past Events - Information and Cultural Affairs Department</title>
        <?php include'../include/header.php' ?>
    </head>
<body>
   
<?php include'../include/navigation.php' ?>


    <!-- mid -->
	<div class="mid">
		<div class="sectiongap">
			<div class="container">
                <h2><strong>Past Events</strong></h2>
                <?php if ($upcomingevents): ?>
                	<div class="row row-cols-1 row-cols-sm-1 row-cols-md-4 g-3 mb-5">
				<?php foreach ($upcomingevents as $event): 
				
					?>
					<div class="col">
						<div class="upcoming_event_blocks">
							<div class="card h-100">
								<img src="<?php echo ASSET_URL . $event['image']; ?>"
									class="img-fluid cropped-image cover-image" alt="...">
								<div class="card-body">
									<div class="date_div"><i class="fa-regular fa-calendar-days"></i> 
								
									<?php echo $event['event_date']; ?>
								
									</div>
									<div class="venue_div">
										<i class="fa-solid fa-location-dot"></i> <?php echo $event['venue']; ?>
									</div>
									<h5><?php echo $event['title']; ?>
									</h5>
								</div>
								<div class="card-footer border-0 bg-transparent">
								<a href="<?php echo $base_url; ?>events/past-events/<?php echo generate_slug($event['title']); ?>"
								class="readmore stretched-link">View More</a>
							</div>
							</div>			
							

						</div>
					</div>
                <?php endforeach; ?>

				</div>
                <?php else : ?>
                <div class="text-center coming-soon">
                    <img class="img-fluid" src="images/coming-soon.webp" />
                </div>
                
               <?php endif; ?>
                
			</div>
		</div>
	</div>
    <!-- /mid -->



    <?php include'../include/footer.php' ?>
    
</body>
</html>

<?php 

function generate_slug($string) {
    $string = strtolower($string);
    $string = preg_replace('/[^a-z0-9_\s-]/', '', $string);
    $string = preg_replace('/[\s-]+/', ' ', $string);
    $string = preg_replace('/[\s_]/', '-', $string);
    return $string;
}

?>