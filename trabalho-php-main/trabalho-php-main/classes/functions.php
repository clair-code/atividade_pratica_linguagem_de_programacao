<?php 
function redirect($rota)
{
  $host  = $_SERVER['HTTP_HOST']; // mudar pra serve.php
  $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/''); // mudar pra serve.php
  $extra = $rota;
  header("Location: http://$host$uri/$extra");
} 