<?php
if($_GET['nombre']){
  echo "jesus";

$no = json_encode($_GET['nombre']);
return json_decode($no);
}
