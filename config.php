<?php 
    //Sets up the primary database connection
    class databaseSetup{
        private $dbhost;
        private $dbuser;
        private $dbpwd;
        private $dbname;

        protected function connect(){
            $this->dbhost = "localhost";
            $this->dbuser = "root";
            $this->dbpwd = "";
            $this->dbname = "3drm";

            $conn = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpwd, $this->dbname);
            return $conn;
            echo "Success!";
    }
}      
  

?>