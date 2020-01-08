<?php
require_once("req/header.php");
require_once("req/fun.php");

function start(){

  if( true ){
    if(isset($_GET['go']) ){
      getViews($_GET['go']);
    }else {
      getViews("accueil");
    }
  }else {
    pageIntrouvable();
  }
}

start();


require_once("req/footer.php");

 ?>
