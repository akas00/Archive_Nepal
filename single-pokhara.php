<!-- HEADER -->
<?php 


get_header(); ?>

<!-- CONTENTS -->

<section class="content">

  <div class="left-promote">
    <div>Promotional</div>
  </div>

  <div class="faculty-details">
    <div class="faculty-src-link">
    <div class="breatcome_content">
            
               <?php custom_breadcrumbs(); ?>
            
        </div>
    
    </div>
    <div class="faculty-name">
      <h3><?php the_title();?></h3>
    </div>
    <div class="faculty-parts">
      <div>


      <?php if(has_category('year'))
      { ?>
        

      <div class="faculty-semester collapsible">
        <span><?php the_field('year_1');?></span>
        <i class="fi-xnsdxl-chevron-solid"></i>
      </div>

      
     
       <?php
      if( have_rows('firstyear') ): ?>

      <div class="faculty-semester-subjects">
      <?php while ( have_rows('firstyear') ) : the_row();?>
        <div>

        <a href="<?php the_sub_field('firstyear_subjects_links') ?> " target="_blank">  
         <?php the_sub_field('firstyear_subjects');?>
          
         <i class="fi-xwluxl-download-wide"></i> </a>
        </div>
     <?php endwhile;?>
  
      </div>
      <?php endif ?> 

     <?php }elseif(has_category('semester')){?>

      <div class="faculty-semester collapsible">
        <span><?php the_field('semester_1');?></span>
        <i class="fi-xnsdxl-chevron-solid"></i>
      </div>
        <?php
        if( have_rows('1st_semester') ): ?>

        <div class="faculty-semester-subjects">
        <?php while ( have_rows('1st_semester') ) : the_row();?>
          <div>
 
          <a href="<?php the_sub_field('1st_sem_subjects_links') ?> " target="_blank">  
           <?php the_sub_field('1st_sem_subjects');?>
            
           <i class="fi-xwluxl-download-wide"></i> </a>
          </div>
       <?php endwhile;?>
    
        </div>
        <?php endif ?>

      

    <?php } ?>

        
      </div>

      <div>

       <!-- second -->


       <?php if(has_category('year'))
      { ?>


      <div class="faculty-semester collapsible">
        <span><?php the_field('year_2');?></span>
        <i class="fi-xnsdxl-chevron-solid"></i>
      </div>

     
        
     
       <?php
      if( have_rows('secondyear') ): ?>

      <div class="faculty-semester-subjects">
      <?php while ( have_rows('secondyear') ) : the_row();?>
        <div>

        <a href="<?php the_sub_field('secondyear_subjects_links') ?> " target="_blank">  
         <?php the_sub_field('secondyear_subjects');?>
          
         <i class="fi-xwluxl-download-wide"></i> </a>
        </div>
     <?php endwhile;?>
  
      </div>
      <?php endif ?> 

     <?php }elseif(has_category('semester')){?>

      <div class="faculty-semester collapsible">
        <span><?php the_field('semester_2');?></span>
        <i class="fi-xnsdxl-chevron-solid"></i>
      </div>
        <?php
        if( have_rows('2nd_semester') ): ?>

        <div class="faculty-semester-subjects">
        <?php while ( have_rows('2nd_semester') ) : the_row();?>
          <div>
 
          <a href="<?php the_sub_field('2nd_sem_subjects_links') ?> " target="_blank">  
           <?php the_sub_field('2nd_sem_subjects');?>
            
           <i class="fi-xwluxl-download-wide"></i> </a>
          </div>
       <?php endwhile;?>
    
        </div>
        <?php endif ?>

      

    <?php } ?>


<!-- Third -->

<?php if(has_category('year'))
      { ?>

<div class="faculty-semester collapsible">
        <span><?php the_field('year_3');?></span>
        <i class="fi-xnsdxl-chevron-solid"></i>
      </div>

      
        
     
       <?php
      if( have_rows('thirdyear') ): ?>

      <div class="faculty-semester-subjects">
      <?php while ( have_rows('thirdyear') ) : the_row();?>
        <div>

        <a href="<?php the_sub_field('thirdyear_subjects_links') ?> " target="_blank">  
         <?php the_sub_field('thirdyear_subjects');?>
          
         <i class="fi-xwluxl-download-wide"></i> </a>
        </div>
     <?php endwhile;?>
  
      </div>
      <?php endif ?> 

     <?php }elseif(has_category('semester')){?>

      <div class="faculty-semester collapsible">
        <span><?php the_field('semester_3');?></span>
        <i class="fi-xnsdxl-chevron-solid"></i>
      </div>
        <?php
        if( have_rows('3rd_semester') ): ?>

        <div class="faculty-semester-subjects">
        <?php while ( have_rows('3rd_semester') ) : the_row();?>
          <div>
 
          <a href="<?php the_sub_field('3rd_sem_subjects_links') ?> " target="_blank">  
           <?php the_sub_field('3rd_sem_subjects');?>
            
           <i class="fi-xwluxl-download-wide"></i> </a>
          </div>
       <?php endwhile;?>
    
        </div>
        <?php endif ?>

      

    <?php } ?>


    <!-- Fourth -->

    <?php if(has_category('year'))
      { ?>

    <div class="faculty-semester collapsible">
        <span><?php the_field('year_4');?></span>
        <i class="fi-xnsdxl-chevron-solid"></i>
      </div>

      
        
     
       <?php
      if( have_rows('fourthyear') ): ?>

      <div class="faculty-semester-subjects">
      <?php while ( have_rows('fourthyear') ) : the_row();?>
        <div>

        <a href="<?php the_sub_field('fourthyear_subjects_links') ?> " target="_blank">  
         <?php the_sub_field('fourthyear_subjects');?>
          
         <i class="fi-xwluxl-download-wide"></i> </a>
        </div>
     <?php endwhile;?>
  
      </div>
      <?php endif ?> 

     <?php }elseif(has_category('semester')){?>
      <div class="faculty-semester collapsible">
        <span><?php the_field('semester_4');?></span>
        <i class="fi-xnsdxl-chevron-solid"></i>
      </div>
        <?php
        if( have_rows('4th_semester') ): ?>

        <div class="faculty-semester-subjects">
        <?php while ( have_rows('4th_semester') ) : the_row();?>
          <div>
 
          <a href="<?php the_sub_field('4th_sem_subjects_links') ?> " target="_blank">  
           <?php the_sub_field('4th_sem_subjects');?>
            
           <i class="fi-xwluxl-download-wide"></i> </a>
          </div>
       <?php endwhile;?>
    
        </div>
        <?php endif ?>

      

    <?php } ?>




    <!-- Fifth -->

    <?php if(has_category('semester'))
      { ?>
      
    <div class="faculty-semester collapsible">
        <span><?php the_field('semester_5');?></span>
        <i class="fi-xnsdxl-chevron-solid"></i>
      </div>


    <?php
        if( have_rows('5th_semester') ): ?>

        <div class="faculty-semester-subjects">
        <?php while ( have_rows('5th_semester') ) : the_row();?>
          <div>
 
          <a href="<?php the_sub_field('5th_sem_subjects_links') ?> " target="_blank">  
           <?php the_sub_field('5th_sem_subjects');?>
            
           <i class="fi-xwluxl-download-wide"></i> </a>
          </div>
       <?php endwhile;?>
    
        </div>
        <?php endif ?>

        <?php  }elseif('hahaha') ?>

      <?php 
      ?>

        <!-- Sixth -->

        <?php if(has_category('semester'))
      { ?>

        <div class="faculty-semester collapsible">
        <span><?php the_field('semester_6');?></span>
        <i class="fi-xnsdxl-chevron-solid"></i>
      </div>


        <?php
        if( have_rows('6th_semester') ): ?>

        <div class="faculty-semester-subjects">
        <?php while ( have_rows('6th_semester') ) : the_row();?>
          <div>
 
          <a href="<?php the_sub_field('6th_sem_subjects_links') ?> " target="_blank">  
           <?php the_sub_field('6th_sem_subjects');?>
            
           <i class="fi-xwluxl-download-wide"></i> </a>
          </div>
       <?php endwhile;?>
    
        </div>
        <?php endif ?>

        <?php  }elseif('hahaha') ?>

      <?php 
      ?>

        <!-- Seventh -->

        <?php if(has_category('semester'))
      { ?>

        <div class="faculty-semester collapsible">
        <span><?php the_field('semester_7');?></span>
        <i class="fi-xnsdxl-chevron-solid"></i>
      </div>

        <?php
        if( have_rows('7th_semester') ): ?>

        <div class="faculty-semester-subjects">
        <?php while ( have_rows('7th_semester') ) : the_row();?>
          <div>
 
          <a href="<?php the_sub_field('7th_sem_subjects_links') ?> " target="_blank">  
           <?php the_sub_field('7th_sem_subjects');?>
            
           <i class="fi-xwluxl-download-wide"></i> </a>
          </div>
       <?php endwhile;?>
    
        </div>
        <?php endif ?>

        <?php  }elseif('hahaha') ?>

      <?php 
      ?>



        <!-- Eighth -->
        

        <?php if(has_category('semester'))
      { ?>

        <div class="faculty-semester collapsible">
        <span><?php the_field('semester_8');?></span>
        <i class="fi-xnsdxl-chevron-solid"></i>
      </div>

        <?php
        if( have_rows('8th_semester') ): ?>

        <div class="faculty-semester-subjects">
        <?php while ( have_rows('8th_semester') ) : the_row();?>
          <div>
 
          <a href="<?php the_sub_field('8th_sem_subjects_links') ?> " target="_blank">  
           <?php the_sub_field('8th_sem_subjects');?>
            
           <i class="fi-xwluxl-download-wide"></i> </a>
          </div>
       <?php endwhile;?>
    
        </div>
        <?php endif ?>

      <?php  }elseif('hahaha') ?>

      <?php 
      ?>








  <div class="faculty-rightbar">

  </div>

</section> 

<!-- <?php if( get_field('subjects') ): ?>
    <?php while( the_repeater_field('subjects') ): ?>
        <span><?php the_sub_field('yearsem'); ?>" </span>
    <?php endwhile; ?>
 <?php endif;

 ?> -->

<!-- FEATURED -->

<!-- <?php include("section/featured.php"); ?> -->

<!-- FROM WEB -->
<!-- <?php include("section/fromweb.php"); ?> -->

<!-- FOOTER -->
<?php get_footer(); ?>