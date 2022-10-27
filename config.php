<?php 
    //Sets up the database connection
    class databaseSetup{
        private $dbhost;
        private $dbuser;
        private $dbpwd;
        private $dbname;

        protected function connect(){
            $this->dbhost = "localhost";
            $this->dbuser = "root";
            $this->dbpwd = "";
            $this->dbname = "3dm";

            $conn = new mysqli($this->dbhost, $this->dbuser, $this->dbpwd, $this->dbname);
            return $conn;
        }
    }

?>

