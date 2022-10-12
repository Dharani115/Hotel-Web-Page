<?php
require_once('header.php');

?>
<!--banner-->
<section>
<div class="contain" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('image/pani.jpeg');">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
			
            <div class="carousel-inner">
			<?php
			$ret=mysqli_query($con,"SELECT * FROM `banner` limit 3");
			$active="active";
			while ($row=mysqli_fetch_array($ret)){
			?>
               <div class="carousel-item <?php echo $active;?>">
                  <img  class="img" src="<?php echo'admin/uploads/banner/'.$row["banner_image"]?>" alt="Banner images" width="85%" height="580"> 
                  <div class="container">
                    
					 <div class="bg-text">
					 <img src="image/text-slide-top1.png" alt="" style="width: 348.3px; height: 30.1px;">
                        <h3><?php echo $row["title"]?></h3>
                        <p><?php echo $row["sub_title"]?></p>
						<img src="image/text-slide-bottom1.png" alt="" style="width: 348.3px; height: 30.1px;">
					<div>
						<a class="btn-booknow" href='menu.php'>Order Now</a></div>
                     </div>
					 </div>
                  </div>
			<?php
			$active='';
			}
			?>
				<a class="carousel-control-prev text-center" href="#myCarousel" role="button" data-slide="prev">
               <span class="cursor carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next text-center" href="#myCarousel" role="button" data-slide="next">
               <span class="cursor carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
			</div>
	</div>
</div>
</section>
	  <section style="background-image:linear-gradient(to right,rgba(255,0,0,0.6),rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('image/background.jpg');background-size:cover;">
	   <div class="container-fluid top-items">
	   <div data-aos="fade-top"
		 data-aos-easing="ease-out-cubic"
		 data-aos-duration="2000">
	   <h1 class="text-center text-warning index-title">Hotel's Special</h1></div>
	   <div  data-aos="fade-up ">
	   <div class="containerr">
	   <div class="row">
			<?php
			$ret=mysqli_query($con,"SELECT * FROM `top-item`");
			while ($row=mysqli_fetch_array($ret)){
			?>
			<div class="text-overlay" data-aos="zoom-out-down">
			<div class="col-lg-2 col-md-8 col-sm-4 col-xs-4">
					<div class="image">
					      <img src="<?php echo'admin/uploads/top-item/'.$row["top_image"]?>" alt="Break fast menu" alt="Not Found"/>
						  
						  <p class="project-head"> <?php echo $row["title"] ?></p>
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
		</section>
<!--todays special-->
		<section class="ib-contain" style="background-image:linear-gradient(to right,rgba(255,0,0,0.6),rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('image/background.jpg');">
		<div data-aos="fade-top"
		 data-aos-easing="ease-out-cubic"
		 data-aos-duration="2000">
		<h1 class="text-center text-warning display-4 pt-5 index-title">Today's Special</h1></div>
			   <div>
					<?php
					$ret=mysqli_query($con,"SELECT * FROM `tdy-spl`");
					while ($row=mysqli_fetch_array($ret)){
					?>
                    <article class="ib-contain">
                    <div id="my-button" data-aos="zoom-in-up">
                            <span>
                            <a data-target="#model<?php echo $row["ID"]?>" data-toggle="modal" ><img src="<?php echo'admin/uploads/today-special/'.$row["tdy_image"]?>" alt="item image" />
							</a>
                            </span>
                            <h3 class="text-center"> <?php echo $row["title"] ?></h3>
							
                    </div>
					</article>		
					<div class="modal fade show" id="model<?php echo $row["ID"]?>" role="dialog">
			
					<div class="modal-dialog modal-lg">
					<div class="modal-contentt">
					<button style="color:white" type="button" class="close" data-dismiss="modal">&times;</button>
					<h1 style="color:white; padding-left:5px; text-align:center;padding-bottom:20px;"><?php echo $row["title"] ?></h1>
					
					<div class="col-md-11" data-aos="zoom-out-down">
					<div class="table-responsive">
						<table class="menu-table-borderedd pt-5">
								<?php
								$edit_id=$row['ID'];
								$resu=mysqli_query($con,"SELECT * FROM `tdy-spl-item` WHERE `select`='$edit_id'");
								while ($row=mysqli_fetch_array($resu)){
								?>
							
								<td>
								<div class="col-lg-2 col-md-8 col-sm-4 col-xs-4">
									<div class="image pt-5">
										<img src="<?php echo'admin/uploads/today-special/'.$row["image"]?>" alt="Break fast menu" alt="Not Found"/>
										  
										  <p class="project-head"> <?php echo $row["name"] ?></p>
									</div>
								</div>
							
								<?php } ?>	
						</table>
					</div>
					</div>
					<div class="modal-footerr">
					<button style="color:white" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
					</div>
					</div>
					</div>			
					<?php
					}
					?>					
				</div>
				<div class="view-all">
				<a href="menu.php"><button><i class="fas fa-pizza-slice"></i>View More</button></a>
				</div>
        </section>
<!--about section-->		
	 <section>
		<div class="container-fluid" style="background-image:linear-gradient(to right,rgba(255,0,0,0.6),rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('image/background.jpg'); background-size:cover;">
		 <div data-aos="fade-top"
		 data-aos-easing="ease-out-cubic"
		 data-aos-duration="2000">
            <h1 class="text-center text-warning about index-title">About Vrindavan Nest</h1></div>
            <div class="row py-5">
			<?php
			$ret=mysqli_query($con,"SELECT * FROM `about-us` where ID=5");
			$row=mysqli_fetch_array($ret);
			?>
               <div class="col-lg-4 col-md-4 col-sm-12">
			   <div data-aos="flip-right"
				 data-aos-easing="ease-out-cubic"
				 data-aos-duration="2000">
                  <img src="<?php echo'admin/uploads/about/'.$row["image"]?>" class="home-about-img">
               </div></div>
			   
               <div class="col-lg-8 col-md-8 col-sm-12 border-left border-warning home-about-border">
					<div data-aos="fade-up"
					data-aos-easing="ease-out-cubic"
					data-aos-duration="1000">
				  <p class="text-justify pt-3 home-about-height text-white">
					<b class="object-3"><?php echo $row["description"] ?></b></p></div>
               </div>
            </div>
         </div>
      </section>
	  <!--service section-->
	  <section style="background-image:linear-gradient(to right,rgba(255,0,0,0.6),rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('image/background3.png');  background-size: cover;">
	  <div class="services-section">
      <div class="inner-width" >
        <h1 class="section-title text-warning index-title">Our   Services</h1>
        <div class="services-container">
		<?php
		$ret=mysqli_query($con,"SELECT * FROM `servise`");
		while ($row=mysqli_fetch_array($ret)){
		?>
          <div class="service-box"  data-aos="fade-up">
            <div class="service-icon">
              <i class="<?php echo $row["icon"] ?>"></i>
            </div>
            <div class="service-title"><?php echo $row["title"] ?></div>
            <div class="service-desc">
              <?php echo $row["description"] ?>
            </div>
          </div>
			<?php
			}
			?>
        </div>
      </div>
    </div>

		<!--review section-->
	  <div><!-- style="background-image:linear-gradient(to right,rgba(255,0,0,0.6),rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('image/background2.jpg'); background-size:cover; background-repeat:repeat; width:100%"-->
		<div class="container">
		<h1 class="text-center text-warning head index-title">Review </h1>
          <div class="row ">
		  <?php
			$ret=mysqli_query($con,"SELECT * FROM `tesinomial` limit 3");
			while ($row=mysqli_fetch_array($ret))
    		{
			?>
            <div class="col-md-6 col-lg-4 py-5">
              <div class="user-review">
			  <img src="<?php echo'admin/uploads/review/'.$row["image"]?>">
			  <h5 style="color:#94e8d5;"><b><?php echo $row["name"] ?></b></h5>
				<small style="color:#e9ec1d;"><i><?php echo $row["address"] ?></i></small>
				<div data-aos="zoom-in-up">
                <p style="font-family: Times New Roman;"><?php echo $row["message"] ?></p>
			  </div>
             </div>
			</div>
			<?php } ?>
          </div>
	  </div>
	  </div>
	  </div>
	  </section>
<?php
require_once('footer.php');
?>