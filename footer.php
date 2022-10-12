	<!--footer section -->
	<footer style="box-shadow:15px 10px 10px 15px white;">
          <div class="row">
		  <?php
		  $ret=mysqli_query($con,"SELECT * FROM `contact`");			
		  while ($row=mysqli_fetch_array($ret)){
		  ?>
			 <div class="home-map">
			   <iframe width="auto" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" <?php echo $row["map"] ?>"></iframe>
			   <br /><small><a href="https://goo.gl/maps/TE7p2gU8GZn" style="color:white;text-align:left">View Larger Map</a></small>
			</div>
            <div class="col-md-3 text-left">
			<ul class="list-inline">
				<h4 data-aos="fade-up">Quick Links</h4>
				<li data-aos="fade-up" class="list-itemm"><a href="index.php">Home</a></li>
				<li data-aos="fade-up" class="list-itemm"><a href="about.php">About</a></li>
				<li data-aos="fade-up" class="list-itemm"><a href="menu.php">Menu</a></li>
				<li data-aos="fade-up" class="list-itemm"><a href="gallery.php">Gallery</a></li>
				<li data-aos="fade-up" class="list-itemm"><a href="contact.php">Contact</a></li>
				<li data-aos="fade-up" class="list-itemm"><a href="reservation.php">Reservation</a></li>
				<li data-aos="fade-up" class="list-itemm"><a href="user-login.php">Login</a></li>
				<li data-aos="fade-up" class="list-itemm"><a href="reviews.php">Testinomial</a></li>
			</ul>
            </div>
            

            <div class="col-md-3 text-left">
              <h4 data-aos="fade-up">Features</h4>
			  <p data-aos="fade-up">Table Reservation</p>
              <p data-aos="fade-up">Deals & Offers</p>
              <p data-aos="fade-up">Customer Reviews</p>
              <p data-aos="fade-up">Cancelation Policy</p>
            </div>
            
            <div class="col-md-3 text-left">
              <h4 data-aos="fade-up">Quick Contact</h4>
              <a data-aos="fade-up" href="https://api.whatsapp.com/send?phone=<?php echo $row["MobileNumber"] ?>"><p><i class="fa fa-whatsapp" style="color:white;" style="color:white;" data-aos="fade-up"><span>:   7899990950</span></i></p></a>
              <a data-aos="fade-up" href="mailto:<?php echo $row["Email"] ?>" data-aos="fade-up"><p><i class="fa fa-google" style="color:white;" style="color:white;" data-aos="fade-up">: vrindavan@gmail.com</i></p></a>
              <a data-aos="fade-up"><p><i class="fa fa-home" data-aos="fade-up">:  Vrindavan Nest Veg Restaurant ,<br>N.H 66, Katapadi,Udupi,Karnataka</i></p></a>
              
            </div>
		  <?php } ?>
			</div>
			<div class="bg-white">
			<hr/>
			</div>
			<div class="footer-copyright text-center">
			
				<p>&copy; 2020 Copyright: Vrindavan Nest.com</p>
			</div>
			<div>
				Designed by<a href="www.https://accerlarlab.com" style="color:orange"> Accelerlab Technology</a>
			<ul class="list-inline">
				<li class="list-inline-item">
				<a href="https://facebook.com/accelerbar"><i class="fa fa-facebook"></i></a>
				</li>
				<li class="list-inline-item">
				<a href="https://instargam.com/accelerbar"><i class="fa fa-instagram"></i></a>
				</li>
				<li class="list-inline-item">
				<a href="https://twitter.com/accelerbar"><i class="fa fa-twitter"></i></a>
				</li>
				<li class="list-inline-item">
				<a href="https://whatsapp.com/"><i class="fa fa-whatsapp"></i></a>
				</li>
				<li class="list-inline-item">
				<a href="https://linkedin.com/accelerlab"><i class="fa fa-linkedin"></i></a>
				</li>
			</ul>
				</div>
		</div>
        </div>
</footer>
	<!-- script section-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	
    <!-- script section end-->
</body>
</html>
<script>
  AOS.init();
</script>	