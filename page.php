<?php
/*
Template name: page.php
author : Mathenge Moses
description:  powers generic pages 
-- 

*/
?>

<?php    get_header(); ?>
<h3> <?php get_search_form()  ;  ?> </h3> 

<!-- <a href="index.php?page_id=23" title="Search Page">Search Page</a> -->


<div class="notice"> This page is powered by page.php </div>

   <div class="below_header"> 

<?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        ?>

        <h3> <?php the_title() ; ?> </h3>

      <!--CONDITIONAL LOGIC -->   
      <!-- page_1 Nothing special -->


        <div class="columns">



        <?php get_template_part('content'); ?>
      
        </div><!-- columns -->



            

     <?php 
    } // endwhile
 

    } // endif
  
    get_footer(); 

 