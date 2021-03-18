<?php
require("header.php");
?>
    <!-- change class -->
    <div class="change-class"></div>

    <div id="search">
      <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="Search..." />
            <button type="submit" class="primary-button"><i class="icon_search"></i></button>
        </form>
    </div>

    <section class="large-gap about-me about-version-two">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="widget-sidebar about-me">
              <div class="widget-header">
                <h4>News</h4>
              </div>
              <div class="widget-content">
                <div class="row">
                  <div class="col-lg-12">
	                  <?php $id = $_GET["page"];
    $res = $mysqli->query("SELECT * FROM Tablica WHERE id = $id");
    $res->data_seek(0);
    $row = $res->fetch_assoc() ?>
                    <img src="Images/<?= $row["image"]; ?>" alt="">
                  </div>
                  <div class="col-lg-12">
	                  <p><h4><em><?= $row['title']?></em></h4></p>
                    <p><?= $row["text"];?></p>
                    <time><?= $row['date'] ?></time>
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-rss"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
						<div class="instagram-footer">
							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										<div class="instagram-account"><div class="widget-content">
											<div class="widget-header">
          	        						<h4><a href="<?=$button_main_page?>">Back</a></h4>
		  									</div>
		  								</div>
		  							</div>
		  						</div>
		  					</div>
		 				</div>
		 			</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <div class="instagram-footer">
      <div class="container">
        <div class="row justify-content-center">
            <div class="instagram-account bg-dark">
              <div class="widget-content">
                <div class="widget-header">
                  <h4><a href="#">@shareenBlog</a></h4>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="footer-social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
              <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
              <li><a href="#"><i class="fa fa-behance"></i> Behance</a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i> Linkedin</a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i> Dribbble</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>all rights reserved. <a href="#">Paraev Pavel, Redut Anatoly, Netyagin Mihail </a> 2020.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

    <!-- Scripts -->
    <script src="jquery-3.4.1.min.js"></script>
    <script src="jquery.hoverIntent.min.js"></script>
    <script src="perfect-scrollbar.min.js"></script>
    <script src="jquery.easing.min.js"></script>
    <script src="wow.min.js"></script>
    <script src="parallax.min.js"></script>
    <script src="isotope.min.js"></script>
    <script src="imagesloaded.pkgd.min.js"></script>
    <script src="packery-mode.pkgd.min.js"></script>
    <script src="owl-carousel.min.js"></script>
    <script src="jquery.appear.js"></script>
    <script src="jquery.countTo.js"></script>
    <script src="main.js"></script>


  </body>
</html>
