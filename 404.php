
<?php 
	get_header();
?>
	<div id="main-wrapper" class="error404-section">
		<!-- Content Section -->
		<section id="error404-content">
			<div class="container-max">
                <div class="content-wrapper">
                    <h1>Oops!</h1>
                    <h2>404 Page Not Found</h2>
                    <div class="error-details">
                        Sorry, an error has occured, Requested page not found!
                    </div>
                    <div class="error-actions">
                        <a href="<?= get_home_url(); ?> ">
                            <div class="arrows">
                                <span class="green-arrow"></span>
                                <span class="white-arrow"></span>
                            </div>
                            <p>Take Me Home</p>
                        </a>
                    </div>
                </div>
			</div>
		</section>
	</div>
<?php 
	get_footer(); 
?>