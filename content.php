<style>
  body{
    scroll-behavior: smooth;
  }
</style>
<!-- main content starts  -->
<div class="main-content">
    <!-- favorite section starts   -->


    <section id="iq-favorites" >
      <div class="container-fluid" id="movies">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
              <h4 class="main-title">Top Picks For You</h4>
              <a href="#" class="iq-view-all">View All</a>
            </div>
            <div class="favorite-contens">
              <ul class="favorites-slider list-inline row p-0 mb-0">
                <!-- slide item 1 -->
                <?php
                            include 'conn.php';
                            $query=mysqli_query($conn,"SELECT id,title,runtime,GP_rating,poster_url FROM movies ORDER BY RAND();");
                           while( $fetch=mysqli_fetch_array($query)){

                            ?>
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                    <img src="admin/<?php echo $fetch['poster_url'] ?>" alt="" style="width:329px; height: 135px ;" class="img-fluid">
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"><?php echo $fetch['title']; ?> </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2"><?php echo $fetch['GP_rating']; ?></div>
                        <span class="text-white">1h 43min</span>
                      </div>
                      <div class="hover-buttons">
                      <a href="details.php?id=<?php echo $fetch['id']?>" class="btn btn-hover iq-button">
  <span class="material-symbols-outlined" style=" vertical-align: middle;">theaters</span>Book Now
</a>
                      </div>
                    </div>       
                  </div>     
                </li>
                <?php 
                }
                ?>
                 
              
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- favourite section ends -->

    <!-- upcoming contents section starts  -->
    <section id="iq-favorites">
  <div class="container-fluid" id="movies">
    <div class="row">
      <div class="col-sm-12 overflow-hidden">
        <div class="iq-main-header d-flex align-items-center justify-content-between">
          <h4 class="main-title">Popular Movies</h4>
          <a href="#" class="iq-view-all">View All</a>
        </div>
        <div class="favorite-contens">
          <ul class="favorites-slider list-inline row p-0 mb-0">
            <!-- slide item 1 -->
            <?php
              include 'conn.php';
              $query = mysqli_query($conn, "SELECT id, title, runtime, GP_rating, poster_url FROM movies WHERE rating > 5");
              while ($fetch = mysqli_fetch_array($query)) {
            ?>
            <li class="slide-item">
              <div class="block-images position-relative">
                <div class="img-box">
                  <img src="admin/<?php echo $fetch['poster_url'] ?>" alt="" style="width:329px; height:135px;" class="img-fluid">
                </div>
                <div class="block-description">
                  <h6 class="iq-title">
                    <a href="#"><?php echo $fetch['title']; ?></a>
                  </h6>
                  <div class="movie-time d-flex align-items-center my-2">
                    <div class="badge badge-secondary p-1 mr-2"><?php echo $fetch['GP_rating']; ?></div>
                    <span class="text-white"><?php echo $fetch['runtime']; ?></span>
                  </div>
                  <div class="hover-buttons">
                    <a href="details.php?id=<?php echo $fetch['id']; ?>" class="btn btn-hover iq-button">
                      <span class="material-symbols-outlined" style="vertical-align:middle;">theaters</span>Book Now
                    </a>
                  </div>
                </div>       
              </div>     
            </li>
            <?php 
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
              
    <!-- upcoming contents section ends -->

    <!-- top ten trending  -->

    <section id="iq-topten">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="topten-contents">
              <h4 class="main-title iq-title topten-title">
                Trending
              </h4>
              <ul id="top-ten-slider" class="list-inline p-0 m-0 d-flex align-items-center">
     <?php  
     $query=mysqli_query($conn,"SELECT title,poster_url,id FROM `movies` ORDER BY rating DESC LIMIT 6");
     while($fetch=mysqli_fetch_array($query)){
     ?>
              <li class="slick-bg">
                  <a href="#">
                    <img src="admin/<?php echo $fetch['poster_url']; ?>" class="img-fluid w-100" alt="" style="height:907px;" />
                    <h6 class="iq-title"></h6>
                  </a>
                </li>
                <?php
                }
                ?>
              </ul>
              <div class="vertical_s">
                <ul id="top-ten-slider-nav" class="list-inline p-0 m-0 d-flex align-items-center">
                <?php 
$query = mysqli_query($conn, "SELECT title, id, GP_rating, runtime, poster_url FROM `movies` ORDER BY rating DESC LIMIT 6");
while ($fetch = mysqli_fetch_array($query)) {
?>
    <li>
        <div class="block-images position-relative">
            <a href="#">
                <img src="admin/<?php echo htmlspecialchars($fetch['poster_url']); ?>" class="img-fluid w-100" alt="<?php echo htmlspecialchars($fetch['title']); ?>" />
            </a>
            <div class="block-description">
                <h5><?php echo htmlspecialchars($fetch['title']); ?></h5>
                <div class="movie-time d-flex align-items-center my-2">
                    <div class="badge badge-secondary p-1 mr-2">
                        <?php echo htmlspecialchars($fetch['GP_rating']); ?>
                    </div>
                    <span class="text-white"><?php echo htmlspecialchars($fetch['runtime']); ?></span>
                </div>
                <div class="hover-buttons">
                      <a href="details.php?id=<?php echo $fetch['id'] ?>" class="btn btn-hover iq-button">
  <span class="material-symbols-outlined" style=" vertical-align: middle;">theaters</span>Book Now
</a>
                      </div>
            </div>
        </div>
    </li>
<?php
}
?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   
   


    


  </div>

  <!-- main content ends  -->