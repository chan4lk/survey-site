<?php

$TITLE = 'Home';
if(isset($_GET["page"])){
    $PAGENAME = $_GET["page"];
}else{
    $PAGENAME = 'home';
}

include_once('templates/header.php'); ?>
<div class="container body">
    <?php include_once('pages/'.$PAGENAME.'.php'); ?>

</div>
<?php
include_once('templates/footer.php');
