<?php

class index_html{
  public static function doctype(){
    echo '<!DOCTYPE html>';
  }
  public static function html_start($lang){
    echo '<html lang="'.$lang.'">';
  }
  public static function html_end(){
    echo '</html>';
  }
  public static function head_start(){
    echo '<head>';
  }
  public static function head_end(){
    echo '</head>';
  }
  public static function body_start(){
    echo '<body>';
  }
  public static function body_end(){
    echo '</body>';
  }
}