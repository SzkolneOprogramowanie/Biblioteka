<?php

class meta{
  public static function description(){
    echo '<meta name="description" content="Darmowy, otwartoźródłowy program dla biblioteki.">';
  }
  public static function charset(){
    echo '<meta charset="UTF-8">';
  }
  public static function keywords(){
    echo '<meta name="keywords" content="bibliotek,system,darmowy,library,free,system,opensource">';
  }
  public static function author(){
    echo '<meta name="author" content="SzkolneOprogramowanie">';
  }
  public static function generator($version){
    echo '<meta name="generator" content="Bib-Reg v. '.$version.'">';
  }
}