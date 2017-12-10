<?php

class requiring{

  public static function include_css(){
    foreach (glob("./includes/css/*.css") as $filename)
        {
            echo '<link rel="stylesheet" href="'.$filename.'">';
            echo '';
        }
  }
  public static function include_footer(){
    echo '';
  }
  
}
