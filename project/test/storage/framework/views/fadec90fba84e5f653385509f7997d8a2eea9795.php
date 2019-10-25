<section>
        <div class="container">
            <div class="row">
               
                  <?php echo $__env->make('frontend_theme.frontend_index.left_side', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
               

                <div class="col-sm-9 padding-right">
                 <?php echo $__env->make('frontend_theme.frontend_index.features_item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <!--features_items-->

                    <?php echo $__env->make('frontend_theme.frontend_index.category_tab', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <!--/category-tab-->


                </div>
            </div>
        </div>
    </section>