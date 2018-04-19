<?php
include("header.php");
$sec = new sec();
if($sec->checktoken($_COOKIE["token"],$_COOKIE["user"]) == false)
  die("<h1 class='text-center text-danger'> Sesiune Inavlidă </h1>");
?>
<div class="container">
  <div class="row">
    <div class="col">
    
    </div>
  </div>
</div>
<?php
include("footer.php");
?>