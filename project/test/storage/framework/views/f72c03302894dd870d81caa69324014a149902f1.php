	 

  
 <?php $__env->startPush('styles'); ?>



<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
	 
	 
	
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
					
				</div>			 		
			</div>    	
			
    		<div class="row">  	
			
	    		<div class="col-sm-8">
				 <?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong class="text-center"><?php echo e($message); ?></strong>
</div>
<?php endif; ?>
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none">
						</div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="<?php echo e(route('contactus.store')); ?>">
				         
						 <?php echo e(csrf_field()); ?>

						 
						    <div class="form-group col-md-6 <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
				                <input type="text" name="name" class="form-control"  placeholder="Name">
				           <?php echo $errors->first('name', '<strong class="text-danger">:message</strong>'); ?>

						    </div>
							       

				            <div class="form-group col-md-6 <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
				                <input type="email" name="email" class="form-control"  placeholder="Email">
				           <?php echo $errors->first('email', '<strong class="text-danger">:message</strong>'); ?>

						    </div>
				            <div class="form-group col-md-12 <?php echo e($errors->has('subject') ? 'has-error' : ''); ?>">
				                <input type="text" name="subject" class="form-control" placeholder="Subject">
				             <?php echo $errors->first('subject', '<strong class="text-danger">:message</strong>'); ?>

							</div>
							 <div class="form-group col-md-12 ">
				                <input type="text" name="contact" class="form-control"  placeholder="Contact">
				             <?php echo $errors->first('contact', '<strong class="text-danger">:message</strong>'); ?>

							</div>
				            <div class="form-group col-md-12 <?php echo e($errors->has('message') ? 'has-error' : ''); ?>">
				                <textarea name="message" id="message"  class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				             <?php echo $errors->first('message', '<strong class="text-danger">:message</strong>'); ?>

							</div>                        
				            <div class="form-group col-md-12 ">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>E-Shopper Inc.</p>
							<p>935 W. Webster Ave New Streets Chicago, IL 60614, NY</p>
							<p>Newyork USA</p>
							<p>Mobile: +2346 17 38 93</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: info@e-shopper.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend_theme.frontend_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>