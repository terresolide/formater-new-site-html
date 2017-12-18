<?php 
/**
 * Redirection page 
*/



// language
//---------
 $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
 $lang = $lang == "fr" ? "fr": "en";

 $language = array(
    "title" => array( 
        "fr" => "ForM@Ter a un nouveau site",
        "en" => "A new portal for ForM@Ter"),
    "slogan" => array(
        "fr" => "Données et Services pour la Terre Solide",
        "en" => "Data and Services for the Solid Earth"),
    "url_new"=> array(
        "fr" => "https://www.poleterresolide.fr",
        "en" => "https://en.poleterresolide.fr"),
     "presentation" => array( 
        "fr" => "Pour 2018, ForM@Ter ....",
        "en" => " New Year 2018")
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
    <title><?php printer( "title");?></title>
    <style>
    body, html {
        height: 100%;
        background:#d6c6a5;
        color:#fff;
        margin:0;
        padding:0;
    }
    #slide1 {
        background-image: url(images/bkg-img1.jpg);
        /* Full height */
        height: 100%;
        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: top left;
        background-repeat: repeat;
        
    }
    #slide2{
       /* background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;*/
        height:15%;
        background:#fff;
        box-shadow:  0 0 5px 2px #282a2d; 
    }
    #slide3 {
        background-image: url(images/bkg-img2.jpg);
        min-height:280px;
        height: 40%;
        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    #slide4 {
        /* Full height */
        height: 45%;
        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background:#fff;
    }
    .slide_inside{
        padding:50px;
    }
    .site-branding h1 a {
        background-color: rgba(221,153,70,.5);
        color: #fff;
        text-decoration:none;
        display: inline-block;
        margin-bottom: 10px;
        padding: 0 20px;
        border: none;
        font-size: 40px;
        line-height: 50px;
        text-transform: uppercase;
        color: #FFF;
    }
    .site-branding p {
        display: inline-block;
        margin: 0;
        padding: 0 10px;
        background-color: rgba(0, 0, 0, 0.3);
        font-size: 18px;
    }
    .site-branding > div {
        padding-left: 10%;
        padding-right: 10%;
    }
    </style>
  </head>
  <body load="scroll(0,0)">

  <div id="slide1">
  <div style="text-align:center;height:100%;">
    <div style="margin:0 auto;background:#fff;color:#000;display:inline-block;height:98%;width:80%;padding:5px 10px;text-align:left;">
    <div><img src="images/logo-formater-transparent.png"/></div>
    <div >formater a un nouveau site</div>
    <div>aussi ici</div>
    <div>aussi là</div>
    </div>
  </div>
  </div>
  
  <div id="slide2">
    <div style="padding:10px 30px;display:inline;max-height:100%;padding-left:10%;">
      <img src="images/logo-formater-transparent.png" style="max-height: 95%;height:70px;margin-top:5px;"/>
    </div>
  </div>
  
  <div id="slide3">
    <div class="slide_inside site-branding">
      <div>
      <h1 class="site-title"><a href="<?php printer( "url_new");?>" rel="home">ForM@Ter</a></h1>
      <p class="site-description"><?php printer( "slogan");?></p>
    </div>
  
    </div>
  </div>
  <div id="slide4">
    et un autre slide
  </div>
  <script type="text/javascript">
  var position = document.getElementById("slide2").offsetTop;
  var hasScroll = false;
  
  window.onload= function(){
      console.log("loaded");
      setTimeout( function(){
      window.scroll( 0, 0);
     hasScroll = false;
   /* window.onscroll = function(){
        hasScroll = true;
        console.log("scroll");
    };*/
    setTimeout(scroller, 3000);
      },0);

   
    
   

    //edited to add simple animation
  function scroller() { 
      var scrollY = window.scrollY;
      scrollY += 3;
      window.scrollTo( 0, scrollY);
      if (!hasScroll && scrollY < position) {
        timer = window.setTimeout(scroller, 0);
      } 
  }
  };
  
 
  </script>
  </body>
</html>
