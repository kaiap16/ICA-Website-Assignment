
<?php
  $footer_bg = get_theme_mod('firstexample_footer_bg', 'dark');
  $footer_class = "bg-".$footer_bg;

  $footer_text = "text-light";
  if($footer_bg == "light"){
    $footer_text = "text-dark";
  }
?>

<div class="container-fluid <?php echo $footer_class." ".$footer_text;?>">
  <div class="row footer-style">
      <?php
    
        $footer_layout = get_theme_mod('firstexample_footer_widget_count','2');
        $sidebars_active = false;

        for($i=0;$i<$footer_layout;$i++){
          if(is_active_sidebar('footer-sidebar-'. ($i+1))){
            $sidebars_active = true;
          }
        }

        if($sidebars_active):
          for($i=0;$i<$footer_layout;$i++):

            echo "<div class='col'>";
            if(is_active_sidebar('footer-sidebar-'. ($i+1))){
              dynamic_sidebar('footer-sidebar-'. ($i+1));
            }
            echo "</div>";
            
          endfor;
        endif;

      ?>


  </div>
  <div class="row">

<div class="col-4 col-sm-1"></div> 

      <div class="col-4 col-sm-10">
        <?php
  
  if(is_active_sidebar('footer-sidebar-bottom')){
    dynamic_sidebar('footer-sidebar-bottom');
  }

         ?>
      </div> 
      <div class="col-4 col-sm-1"></div>

  </div>

  
</div>

<?php wp_footer(); ?>

</body>
</html>