<header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('frontend/images/home/logo.png ')); ?>" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            

                            
                        </div>
                    </div>
                    <div class="col-sm-8">
                      


  <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
              
                                <?php if(Auth::guest()): ?>
                                <li><a href="<?php echo e(url('login')); ?>"><i class="fa fa-lock"></i> Login</a></li>
                                <li><a href="<?php echo e(route('frontend.register.create')); ?>"><i class="fa fa-lock"></i> Register</a></li>
                          
                          
                          
                                   <?php if(Session::has('cart') ): ?>
                            <li><a href="<?php echo e(url('shopping/cart')); ?>"><i class="fa fa-shopping-cart"></i> Cart  
                         
                             <?php if(Session::get('cart')->totalQty > 0): ?>
                                <span class="badge"> 
                                <?php echo e(Session::get('cart')->totalQty); ?>        
                                </span>
                                <?php else: ?>
                                <span class="badge" style="display:none"> 
                                        <?php echo e(Session::get('cart')->totalQty=0); ?>


                                </span>
                            <?php endif; ?> 
                            </a>
                            
                          
                            
                            </li> 
                                         
                            <?php endif; ?>  
                            <?php else: ?>
                          
                                   
                                  
                             
                           
                                  
                                         
                            <li class="dropdown"><a href="#"><i class="fa fa-user"></i>Account</a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="<?php echo e(url('address')); ?>">Address Manage</a></li><br>
                                    <li><a href="<?php echo e(url('profile')); ?>">Profile</a></li><br>
                                    <li><a href="<?php echo e(url('order')); ?>">Orders</a></li><br>
                                      <li><a href="<?php echo e(route('order.track')); ?>">Order Track</a></li><br>
                                        <li><a href="<?php echo e(route('profile.password')); ?>">Change Password</a></li>
                                </ul>
                            </li>
                                                     <li><a href="<?php echo e(url('contact')); ?>"><i class="fa fa-star"></i> Contact Us</a></li>  

                            <li><a href="<?php echo e(url('wishlist')); ?>"><i class="fa fa-star"></i> Wishlist</a></li>  
                            <li><a href="<?php echo e(url('checkout')); ?>"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                             

 <?php if(Session::has('cart') ): ?>
                            <li><a href="<?php echo e(url('shopping/cart')); ?>"><i class="fa fa-shopping-cart"></i> Cart  
                         
                             <?php if(Session::get('cart')->totalQty > 0): ?>
                                <span class="badge"> 
                                <?php echo e(Session::get('cart')->totalQty); ?>        
                                </span>
                                <?php else: ?>
                                <span class="badge" style="display:none"> 
                                        <?php echo e(Session::get('cart')->totalQty=0); ?>


                                </span>
                            <?php endif; ?> 
                            </a>
                            
                          
                            
                            </li> 
                                         
                            <?php endif; ?>  
                             
                                 <li class="dropdown"><a href="#"><i class="fa fa-user"></i> <strong class="text-danger"><?php echo e(ucfirst(auth()->user()->first_name)." ".ucfirst(auth()->user()->last_name)); ?></strong></a>
                                    <ul role="menu" class="sub-menu">
                                        <li>     <a href="<?php echo e(route('frontend.logout')); ?>"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                <strong><span >Logout</span></strong>
                                            </a>
    
                                            <form id="logout-form" action="<?php echo e(route('frontend.logout')); ?>" method="POST" style="display: none;">
                                                <?php echo e(csrf_field()); ?>

                                            </form></li>
                                      

                                        
                                        
                                    </ul>
                                </li>
                                         
                                         
                                       
                              
                             
                                
                            <?php endif; ?>


                               
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="<?php echo e(url('/')); ?>" class="active">Home</a></li>
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="">Products</a></li>
                                        
                                        <li><a href="<?php echo e(url('checkout')); ?>">Checkout</a></li>
                                        <li><a href="<?php echo e(url('shopping/cart')); ?>">Cart</a></li>

                                        
                                        <li><a href="login.html">Login</a></li>
                                    </ul>
                                </li>
                                
                                
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
  