    
       <div class="col-md-4 modulo-sidebar">
            <?php if(is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar'); ?>
            <?php endif;?>
          </div>

      </div><!-- /.row -->

    </div><!-- /.container -->


   
     <footer class="blog-footer">
      <p><?php bloginfo('name'); ?></p>
       <p><?php bloginfo('description'); ?></p>
    </footer>    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
  </body>
</html>