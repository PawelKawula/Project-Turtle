<?php
    session_start();

    function page($page)
    {
      if(isset($page) && file_exists("subsites/$page.php"))
      {
        require_once "subsites/$page.php";
      }
      else
      {
        require_once "subsites/index.php";
      }
    }
?>