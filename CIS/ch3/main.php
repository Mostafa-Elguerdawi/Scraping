<?php

    class Connection{
        public $server = "localhost";
        public $user = "root";
        public $pass = "Mostafa";
        public $db_name = "CIS";
        public $conn;

        public function __construct(){
            $this->conn = mysqli_connect($this->server, $this->user, $this->pass, $this->db_name);

        }
    }

    class Login extends Connection{
        public function Log($username, $password){
            $username = mysqli_real_escape_string($this->conn, $username);
            $password = mysqli_real_escape_string($this->conn, $password);
            $query1 = "SELECT * FROM ch3 WHERE username='$username' AND password='$password'";
            $res1 = mysqli_query($this->conn, $query1);
            $count = mysqli_num_rows($res1);
            if($count > 0){
                session_start();
                $_SESSION['user'] = $username;
                return 1;
            }else{
                return 10;
            }
        }
    }

    class Session extends Login{
        public function __construct(){
            session_start();
            parent::__construct();
            if(! isset($_SESSION['user'])){
                http_response_code(403);
                echo "<h1>Access Denied</h1>";
                exit;
                //header("Location: login.php");
            }
        }
    }

    class Settings extends Session{
        public function Change($username, $password, $conpassword){
            $username = mysqli_real_escape_string($this->conn, $username);
            $password = mysqli_real_escape_string($this->conn, $password);
            $conpassword = mysqli_real_escape_string($this->conn, $conpassword);

            $query = "SELECT * FROM ch3 WHERE username='$username';";
            $res = mysqli_query($this->conn, $query);
            $count = mysqli_num_rows($res);
            if($count > 0){
                return 1;
            }else{
                return 10;
            }
        }
    }

    class Logout extends Session{
        public function __construct(){
            session_start();
            session_unset();
            session_destroy();

            header("Location: login.php");
        }
    }
?>