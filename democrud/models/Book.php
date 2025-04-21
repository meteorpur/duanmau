<?php
    include_once 'models/Model.php';
    class Book extends Model {
        private $table = 'books';
        public $connection;
        public function __construct() {
            $this -> connection = new Model();
        }
        public function getAllDataBook() {
            $sql = "SELECT * FROM {$this -> table}";
            $this->connection->setSQL($sql);
            return $this->connection->all();
        }

        public function getIdDataBook($id) {
            $sql = "SELECT * FROM {$this -> table} WHERE id = ?";
            $this->connection->setSQL($sql);
            return $this->connection->first([$id]);
        }

        public function addBook($id, $title, $cover_image, $author, $publisher, $publish_date){
            $sql = "INSERT INTO {$this->table} VALUES (?,?,?,?,?,?)";
            $this->connection->setSQL($sql);
            $this->connection->execute([$id, $title, $cover_image, $author, $publisher, $publish_date]);
        }

        public function editBook($title, $cover_image, $author, $publisher, $publish_date, $id) {
            $sql = "UPDATE {$this -> table} SET `title`=?,`cover_image`=?,`author`=?,`publisher`=?,`publish_date`=? WHERE `id`=?";
            $this->connection->setSQL($sql);
            $this->connection->execute([$title, $cover_image, $author, $publisher, $publish_date, $id]);


        }
        public function deleteBook($id) {
            $sql = "DELETE FROM {$this->table} WHERE id =?";
            $this->connection->setSQL($sql);
            $this->connection->execute([$id]);
        }
    }
?>