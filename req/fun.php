<?php

function getViews($page)
{
    if (file_exists("vue/" . $page . ".php")) {
        require_once("req/header.php");
        include("vue/" . $page . ".php");
        require_once("req/footer.php");
    } elseif (file_exists("vue/" . $page . ".html")) {
        require_once("req/header.php");
        include("vue/" . $page . ".html");
        require_once("req/footer.php");
    } else {
      pageIntrouvable();
    }
}

function pageIntrouvable()
{
    getViews("404");
}

function targetPage()
{
    // ob_start();
    // try {
    //
    //   $url2 = explode( "/" , $_SERVER['REQUEST_URI']);
    //   $url =$url2[count($url2)-1];
    //   if( strpos($url , "?") ){
    //     $page = explode( "?" , $url , 1);
    //   }else{
    //     throw new \Exception("Page introuvable ", 1);
    //   }
    //
    // } catch (\Exception $e) {
    //   echo $e->getMessage();
    //   pageIntrouvable();
    //   die;
    // }
    //
    // ob_end_flush();
    //
    // switch ($page) {
    //   case 'page':
    //     return true;
    //     break;
    //
    //   default:
    //     return false;
    //
    //     break;
    // }
    return true;

}

?>
