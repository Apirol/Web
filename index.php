<?php
	require('header.php');
	$button_href = "login.php";
	$button_href_name = "Log in";
?>


	<div class="main-banner">
      <div class="container expanded">
        <div class="owl-big-banner owl-carousel">
	        <?php
	            $res = $mysqli->query("SELECT title, announce, image FROM Tablica ORDER BY id");
	            $row = $res->fetch_assoc();
	            for ($i = 1; $i <= 3; $i++, $row = $res->fetch_assoc()){
			?> 
          <div class="item">
            <img src="Images/<?=$row['image']?>" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>TOP News</span>
                </div>
                <a href="#"><h4><em><?=$row['title']?></em></h4></a>
                <ul class="post-info">
                  <li><a href="#"><?=$row['date']?></a></li>
                  <li><a href="#">6 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <?php
	          }
	      ?>          
       </div>
        </div>
      </div>
    </div>
    

<?php
$res = $mysqli->query("SELECT * FROM Tablica ORDER BY id ASC");
    while ($row = $res->fetch_assoc()) { 
?>
    <section class="medium-gap standard-home">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="standard-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="standard-post">
                    <div class="post-image">
                      <a href="#"><img src="Images/<?=$row['image']?>" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="meta-category">
                        <span>News</span>
                      </div>
                      <a href="<?= "news.php?page=" . $row['id']; ?>"><h4><em><?= $row['title']?></em></h4></a>
                      <ul class="post-info">
                        <li><a href="#"><?= $row['date']?></a></li>
                        <li><a href="#">Admin</a></li>
                      </ul>
                      <p><?= $row['announce']?></p>
                      <div class="row">
                        <div class="col-lg-6 col-md-6">
                          <div class="comments-info">
                            <i class="fa fa-comment-o"></i>
                            <span>8 comments</span>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <ul class="share-post">
                            <li><i class="fa fa-share-alt"></i></li>
                            <li><a href="<?= "news.php?page=" . $row['id']; ?>">Подробнее</a></li>
                          </ul>
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
    <?php
	    }
	?>
    
    <div class="instagram-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="instagram-account">
              <div class="widget-content">
                <div class="widget-header">
                  <h4><a href="#">@AboutUs</a></h4>
                </div>
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
              <p>all rights reserved. <a href="#">Paraev Pavel, Redut Anatoly, Netyagin Mihail</a> 2020.</p>
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

