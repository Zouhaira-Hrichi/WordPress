<?php
/** 
* Template Name: Home
*/
get_header( );
?>
<div class="content-home text-center" id="content" >
    <div class="container">
    <?php $query = new WP_Query([ 'page_id' => 23] ) ?>
    <?php while($query->have_posts()): $query->the_post( ); ?>
        <div class="row">
            <div class="head">
               <h2><?php the_title( )?></h2>
            </div>
            <div class="content">
        <?php the_content( ) ?>
     </div>
     <a href="<?php the_permalink( )?>" class="read-more"> Read more</a>
        </div>
        <?php endwhile; wp_reset_postdata () ?>
    </div>
</div>
<div class="icones" id="service">
<div class="container">
<div class="row">
    <div class="titre-icon"> 
    <h2 class="text-center">Our Service</h2></div>
<?php $query = new WP_Query([ 'page_id' => 25] ) ?>
    <?php while($query->have_posts()): $query->the_post( ); ?>
                    <div class="col-md-3 text-center">
                        <div class="icon-item">
                            <div class="icon1">
                            <i class="fa-solid fa-heart"></i>
                         </div>
               <h2><?php the_title( )?></h2>
            <div class="content">
        <?php the_content( ) ?>
     </div>

</div>
 </div>
                    <?php endwhile; wp_reset_postdata () ?>
                    <?php $query = new WP_Query([ 'page_id' => 53] ) ?>
    <?php while($query->have_posts()): $query->the_post( ); ?>
                    <div class="col-md-3 text-center">
                        <div class="icon-item">
                            <div class="icon1">
                            <i class="fa-solid fa-desktop"></i>
                         </div>
               <h2><?php the_title( )?></h2>
            <div class="content">
        <?php the_content( ) ?>
     </div>

</div>
 </div>
                    <?php endwhile; wp_reset_postdata () ?>
                    <?php $query = new WP_Query([ 'page_id' => 50] ) ?>
    <?php while($query->have_posts()): $query->the_post( ); ?>
                    <div class="col-md-3 text-center">
                        <div class="icon-item">
                            <div class="icon1">
                            <i class="fa-solid fa-globe"></i>
                         </div>
               <h2><?php the_title( )?></h2>
            <div class="content">
        <?php the_content( ) ?>
     </div>
  
</div>
 </div>
                    <?php endwhile; wp_reset_postdata () ?>
                    <?php $query = new WP_Query([ 'page_id' => 55] ) ?>
    <?php while($query->have_posts()): $query->the_post( ); ?>
                    <div class="col-md-3 text-center">
                        <div class="icon-item">
                            <div class="icon1">
                            <i class="fa-solid fa-gem"></i>
                         </div>
               <h2><?php the_title( )?></h2>
            <div class="content">
        <?php the_content( ) ?>
     </div>
   
</div>
 </div>
                    <?php endwhile; wp_reset_postdata () ?>
    
</div>
</div>
</div>
<div class="galerie text-center" id="galerie" >
    <div class="container-fluid">
    <?php $query = new WP_Query([ 'page_id' => 41] ) ?>
    <?php while($query->have_posts()): $query->the_post( ); ?>
        <div class="row">
            <div class="head">
               <h2><?php the_title( )?></h2>
            </div>
            <div class="content-gal">
        <?php the_content( ) ?>
        
     </div>
     
        </div>
        <?php endwhile; wp_reset_postdata () ?>
    </div>
</div>
  <!-- telechargement-->
  <div class="telechargement">
            <div class="container text-center">
                <h2>Free Download ! </h2>
				
                <a class="btn-telechrgement" href="pdf/mon-site.zip" download data-stylerecorder="true" target=_blank>Télécharger!</a>
            </div>
</div>
<?php get_footer( ); ?>