<?php

function servePage($title, $keywords, $description, $pageName, $trad) {
  $sidebar = $content = '';

  require_once(dirname(__FILE__).'/../tools/rain.tpl.class.php');
  raintpl::configure("tpl_dir", dirname(__FILE__).'/../views/pages/');
  raintpl::configure("cache_dir", dirname(__FILE__).'/../views/tmp/');
  $tpl = new RainTPL;
  $tpl->assign( $trad );


  if(isset($_GET['sidebar'])) {
    echo $tpl->draw('sidebar/' . $pageName, $return_string = true);
  } else if(isset($_GET['content'])) {
    $menu    = $tpl->draw('../menu',              $return_string = true );
    $content = $tpl->draw('content/' . $pageName, $return_string = true );
    $footer  = $tpl->draw('../footer',            $return_string = true );

    echo $menu . $content . $footer;
  } else {
    $sidebar = $tpl->draw('sidebar/' . $pageName, $return_string = true);
    $menu    = $tpl->draw('../menu',              $return_string = true );
    $content = $tpl->draw('content/' . $pageName, $return_string = true);
    $footer  = $tpl->draw('../footer',            $return_string = true );
    include(dirname(__FILE__).'/../views/page.php');
  }
}

servePage($title, $keywords, $description, $pageName, $trad);

?>