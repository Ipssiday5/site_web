<?php
require_once("req/fun.php");

function start(){
    if(isset($_GET['go']) ){
      getViews($_GET['go']);
    }else {
      getViews("accueil");
    }
}

start();
