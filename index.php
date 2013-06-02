<?php
include_once('MyView.php');
$t = new MyView();
$t->friends = array(
    'Rachel', 'Monica', 'Phoebe', 'Chandler', 'Joey', 'Ross'
);
$templates = array('index.phtml','index.xml');
$t->render('skeleton.php', $templates);
?>