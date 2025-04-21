<?php
    class BookController {
        public function index() {
            $modelBook = new Book();
            $listBook = $modelBook -> getAllDataBook();
            include_once 'views/list.php';
        }

        public function create() {
            if(isset($_POST['btnSave'])) {
                $id = null;
                $title = $_POST['title'];
                $author = $_POST['author'];
                $publisher = $_POST['publisher'];
                $publish_date = $_POST['publish_date'];
                $cover_image ='';


                $path = 'uploads/';
                $image_name = time() . '_' . $_FILES['cover_image']['name'];
                $imagePath = $path . $image_name;
                move_uploaded_file($_FILES['cover_image']['tmp_name'], $imagePath);
                $cover_image = $image_name;
                

                $modelBook = new Book();
                $result = $modelBook -> addBook(
                    $id,
                    $title,
                    $cover_image,
                    $author,
                    $publisher,
                    $publish_date
                );
                if($result) {
                    header('location: index.php');
                }
            }
            include_once 'views/add.php';
        }

        public function update() {
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $modelBook = new Book();
                $book = $modelBook -> getIdDataBook($id);
                $imageData = $modelBook -> getIdDataBook($id) -> cover_image;

                if(isset($_POST['btnSave'])) {
                    $title = $_POST['title'];
                    $author = $_POST['author'];
                    $publisher = $_POST['publisher'];
                    $publish_date = $_POST['publish_date'];
                    $cover_image = $_FILES['cover_image']['name'];

                    if(empty($_FILES['cover_image']['name'])) {
                        $cover_image = $imageData;
                    } else {
                        $path = 'uploads/';
                        $image_Name = time() . '_' . $_FILES['cover_image']['name'];
                        $imagePath = $path . $image_Name;
                        move_uploaded_file($_FILES['cover_image']['tmp_name'], $imagePath);
                        $cover_image = $image_Name;
                    }   
                    $modelBook = new Book();
                    $result = $modelBook -> editBook(
                        $title,
                        $cover_image,
                        $author,
                        $publisher,
                        $publish_date,
                        $id
                    );
                    if($result) {
                        header('location: ?act=list');
                    }
                }
            }
            include_once 'views/edit.php';
        }

        public function delete() {
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $modelBook = new Book();
                $result = $modelBook -> deleteBook($id);
                if($result) {
                    header('location: index.php');
                }
            }
        }
        
        
    }
?>