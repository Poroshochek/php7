<?php
function nocache()
{
  header("Expires: Thu, 19 Feb 1998 13:24:16 GMT");
  header("Last-Modified: " . gmdate("D, d M Y H:i:s"));
  header("Cache-Control: no-cache, must-revalidate");
  header("Cache-Control: post-check=0,pre-check=0");
  header("Cache-Control: max-age=0");
  header("Pragma: no-cache");
}