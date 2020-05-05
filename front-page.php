<?php get_header(); ?>
   <section id="first-banner">
      <section class='header-sub-section'>   
         <h1>&lt;Kejani Garage/&gt;</h1>
         <h3>When you learn, teach, </h3>
         <h3>when you get, give.<h3>
      </section>
      <img src="<?php echo get_template_directory_uri(); ?>/img/clip-programming.png" alt='watch'>
   </section> 
   <div id="second-banner">
      <section class='who-section'>
         <section class='who-sub-section'>   
            <h2>&lt;Who We Are/&gt;</h2>
            <p>We are a boutique digital transformation, 
               consultancy and software development company that 
               focus on building world class products, providing 
               excellent services using technology to inspire and 
               implement solutions to enable businesses. We maximize 
               our ability to take on any project by creating a diverse
               team who can bring their experience and perspectives 
               together to solve problems.</p>
         </section>
         <img src="<?php echo get_template_directory_uri(); ?>/img/clip-5.png" alt='watch'>
      </section>    
      <section class='what-section'>
         <img src="<?php echo get_template_directory_uri(); ?>/img/gummy-programming.png" alt='watch'>
         <section class='what-sub-section'>  
            <h2>&lt;What we do/&gt;</h2>
            <p>Hire the best remote developers by test driving them on
               existing codebases! Hire works in an integrated way to 
               improve your hiring pipeline and reduce recruiting burden.
               Leverage the GitStart Community and talk to pre-vetted developers 
               across Africa, Brazil, India, Philippines, Hong Kong, Vietnam
               and more!
            </p>
               <span>Fullstack JS</span>
               <span>Python</span>
               <span>Java</span>
               <span>.Net Core</span>
               <span>React Native</span>
               <span>Swift</span>
         </section>
      </section>
   </div>
   <main>
      <a href="<?php echo site_url('/blog'); ?>">
         <h2 class="section-heading">Latest Tutorials</h2>
      </a>
      <section>
      <?php 

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 9,
        );

        $blogposts = new WP_Query($args);

        while ($blogposts->have_posts()) {
            $blogposts->the_post();
        ?>
         <div class="card">
            <div class="card-image">
               <a href="<?php echo the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" 
                  alt="Card Image">
               </a>
            </div>
            <div class="card-description">
               <a href="<?php echo the_permalink();?>">
                  <h3><?php echo the_title();?></h3>
               </a>
               <p>
                    <?php echo wp_trim_words(get_the_excerpt(), 36);?>
               </p>
               <a href="<?php echo the_permalink();?>" class="btn-readmore">Read more</a>
            </div>
         </div>
    <?php }
        wp_reset_query(); ?>
      </section>
      <!-- <h2 class="section-heading">All Projects</h2>
      <section>
      <?php 
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 2,
        );

        $products = new WP_Query($args);

        while ($products->have_posts()) {
            $products->the_post();
        ?>
         <div class="card">
            <div class="card-image">
               <a href="<?php echo the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" 
                  alt="Card Image">
               </a>
            </div>
            <div class="card-description">
               <a href="<?php echo the_permalink();?>">
                  <h3><?php echo the_title();?></h3>
               </a>
               <p>
                    <?php echo wp_trim_words(get_the_excerpt(), 36);?>
               </p>
               <a href="<?php echo the_permalink();?>" class="btn-readmore">Read more</a>
            </div>
        </div>
        <?php }
            wp_reset_query();
        ?>
      </section> -->
      <h2 class="section-heading">Source Code</h2>
      <section id="section-source">
         <p>
            Source code for all the tutorials are a stored in the following Github organization/repository.
         </p>
         <a href="https://github.com/Kejani-Garage/" class="btn-readmore">Kejani Garage Github Repositories</a>
      </section>
    <?php get_footer(); ?>
