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
     "presentation1" => array( 
        "fr" => "Le pôle Terre Solide ouvre son nouveau site",
        "en" => "Solid Earth Pole open a new portal"),
     "presentation2" => array(
         "fr" => "News, agenda, projets, membres, accès aux données... vous trouverez toutes les informations concernant ForM@Ter sur le nouveau portail: ",
         "en" => "News, diary, projects, members, data access ... you find all informations about ForM@Ter on the new portal:"),
     "presentation3" => array(
         "fr" => "L'ancien portail est toujours accessible via <a href='http://ante.poleterresolide.fr'>http://ante.poleterresolide.fr</a>",
         "en" => "The old portal is however accessible via <a href='http://ante.poleterresolide.fr'>http://ante.poleterresolide.fr</a>"),
     "locale" => array(
         "fr" => "fr_FR",
         "en" => "en_US"),
     "alternate" => array(
         "en" => "fr_FR",
         "fr" => "en_US")
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
    <meta charset="UTF-8">
	<meta property="og:title" content="<?php printer("title");?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://poleterresolide.fr" />
	<meta property="og:image" content="http://poleterresolide.fr/images/logo-formater-transparent.png" />
    <meta property="og:description" content="<?php printer("presentation1");?>" />
    <meta property="og:locale" content="<?php printer("locale");?>" />
	<meta property="og:locale:alternate" content="<?php printer("alternate");?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ForMaTerre">
    <meta name="twitter:title" content="<?php printer("title");?>">
    <meta name="twitter:description" content="<?php printer("presentation1");?>">
    <meta name="twitter:creator" content="@ForMaTerre">
    <meta name="twitter:url" content="http://poleterresolide.fr" />
    <meta name="twitter:domain" content="poleterresolide.fr" />
    <!-- Twitter summary card with large image must be at least 280x150px -->
	<meta name="twitter:image:src" content="https://raw.githubusercontent.com/terresolide/formater-wp-child-theme/master/screenshot.png">
    <link href="images/favicon.ico" rel="shortcut icon">
    <style>
    body, html {
        height: 100%;
        background:#fff;
        margin:0;
        padding:0;
        font-size:16px;
    }
   
    #slide2,
    #slide5{
       /* background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;*/
        height:15%;
        background:#fff;
        box-shadow:  0 0 5px 2px #282a2d; 
    }
    #slide3,
    #slide6 {
        background-image: url(images/bkg-img2.jpg);
        min-height:280px;
        height: 50%;
        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    #slide4,
    #slide7 {
        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background:#fff;
        text-align:center;
    }
    #slide4{
        height: 35%;
    }
    #slide7{
        height:50%;
    }
    .slide_inside{
        padding:50px;
    }
    #slide2 > div{
        padding:10px 30px;display:inline;max-height:100%;padding-left:10%;"
    }
    #slide7 .description{
        font-size:2em;
        font-weight:600;
        margin: 20px auto;
        max-width:900px;
        word-wrap: break-word;
    }
    .site-branding .description{
   font-size:3em;text-align:center; text-shadow:1px 1px #555;
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
        color:#fff;
        background-color: rgba(0, 0, 0, 0.3);
        font-size: 18px;
    }
    .site-branding > div {
        padding-left: 10%;
        padding-right: 10%;
        word-wrap: break-word;
    }

    a{
    color: #754a15;
    text-decoration:none;
    }
    a:hover{
        color: #8c0209;
    }
    @media screen and (max-width: 700px){
         .site-branding .description{
            font-size:2em;
         }
         #slide7 .description{
          font-size:1.5em;
         }
    }
    @media screen and (max-width: 500px){
         .site-branding .description{
            font-size:2em;
         }
         #slide7 .description{
            font-size:1.5em;
         }
    }
    </style>
  </head>
  <body > 
  <div id="slide2">
    <div >
      <a href="<?php printer('url_new');?>">
      	<img src="images/logo-formater-transparent.png" style="max-height: 95%;height:70px;margin-top:10px;"/>
      </a>
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
   <div class="slide_inside site-branding">
   		<div class="description" ><?php printer("presentation1");?>
   		<div><a href="<?php printer("url_new");?>"><?php printer("url_new");?></a></div>
   		</div>
   </div>
  </div>
  <div id="slide6">
    <div class="slide_inside site-branding">
      
    </div>
  </div>
  <div id="slide7">
   <div class="slide_inside">
   		<div class="description">
   		<?php printer("presentation2");?><br />
   		<a href="<?php printer("url_new");?>"><?php printer("url_new");?></a>
   		</div>
   		<div class="description"><?php printer("presentation3")?></div>
   		  
   </div>
  </div>
 <script type="text/javascript">
  setTimeout( function(){
	  window.scrollTo(0,0)
  },0);
 </script>
  </body>
</html>
