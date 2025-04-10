<ul class="favorites-slider list-inline row p-0 mb-0">
                <!-- slide item 1 -->
                <?php
                            include 'conn.php';
                            $query=mysqli_query($conn,"SELECT title,GP_rating,runtime,poster_url FROM `movies` WHERE id=1");
                           while( $fetch=mysqli_fetch_array($query)){

                            ?>
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                    <img src="admin/<?php echo $fetch['poster_url'] ?>" alt="" class="img-fluid">
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"><?php echo $fetch['poster_url']; ?> </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2"><?php echo $fetch['GP_rating']; ?></div>
                        <span class="text-white">1h 43min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Play Now
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">19+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>

                <?php 
                }
                ?>
                <!-- slide item 2 -->
                <!-- <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/favorite/f2.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> War </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">12+</div>
                        <span class="text-white">2h 34min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Play Now
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">58+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li> -->
                <!-- slide item 3 -->
                <!-- <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/favorite/f3.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> Five Feet Apart </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">18+</div>
                        <span class="text-white">2h 57min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Play Now
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">19+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li> -->
                <!-- slide item 4 -->
                <!-- <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/favorite/f4.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> Chhichore </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">10+</div>
                        <span class="text-white">2h 23min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Play Now
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">19+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li> -->
                <!-- slide item 5 -->
                <!-- <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/favorite/f5.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> Doctor Strange </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">12+</div>
                        <span class="text-white">1h 55min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Play Now
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">19+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li> -->
              </ul>