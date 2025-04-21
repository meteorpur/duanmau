<?php
    include_once 'models/Book.php';
    /* echo '<pre>';
    $book = new Book();
    var_dump($book -> getAllDataBook()); */

    include_once 'controllers/BookController.php';
    $bookController = new BookController();
    $luaChon = isset($_GET['act']) ? $_GET['act'] : '/';
    switch($luaChon) {
        case 'list':
            $bookController -> index();
            break;  
        case 'add':
            $bookController -> create();
            break;
        case 'edit':
            $bookController -> update();
        case 'delete':
            $bookController -> delete();
        default:
            $bookController -> index();
            break; 
        }




?>