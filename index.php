<?php 
/**
 * Redirection page 
*/




$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
 $lang = $lang == "fr" ? "fr": "en";

$language = array(
    "title" => array( 
        "fr" => "ForM@Ter a un nouveau site",
        "en" => "A new portal for ForM@Ter")
);
function printer( $name){
    global $lang, $language;
    if( isset( $language[ $name ]) && isset( $language[ $name ][ $lang])){
        echo $language[$name][$lang];
    }
}

?><!DOCTYPE html>
<html>
  <head>
    <title>Page site change</title>
  </head>
  <body>
  <h1><?php printer( "title");?></h1>
  Cette page est une
  page toute simple
  </body>
</html>
