<?php

if(isset($_GET['p'])){
    switch ($_GET['p']){
        case './':
            include '../template/accueil.php';
            break;
        case 'contact':
            include '../template/contact.php';
            break;
        case 'culture':
            include '../template/culture.php';
            break;
        case 'galerie':
            include '../template/galerie.php';
            break;
        case 'geographie':
            include '../template/geographie.php';
            break;
        case 'histoire':
            include '../template/histoire.php';
            break;
        case 'liens':
            include '../template/liens.php';
            break;
        default:
            include '../template/page-404.php';
    }
}else{
    include '../template/accueil.php';
}