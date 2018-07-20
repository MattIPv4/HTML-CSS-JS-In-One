<?php
header('Content-type: text/plain');
if(!isset($_GET['t'])) die();

if($_GET['t'] == 'full') {
    include 'index.php';
} else if($_GET['t'] == 'php') {
    echo file_get_contents('index.php');
} else if($_GET['t'] == 'html') {
    echo file_get_contents('site.html');
} else if($_GET['t'] == 'css') {
    echo file_get_contents('style.css');
} else if($_GET['t'] == 'js') {
    echo file_get_contents('script.js');
}
?>