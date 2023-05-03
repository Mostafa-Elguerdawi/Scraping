<?php

    class Connection{
        protected $server = "localhost";
        protected $user = "root";
        protected $pass = "Mostafa";
        protected $db_name = "CIS";
        public $conn;

        function __construct(){
            $this->conn = mysqli_connect($this->server, $this->user, $this->pass, $this->db_name);
            if($this->conn){
                return 1;
            }else{
                return 10;
            }
        }
    }

    class Login extends Connection{
        public function Log($username, $password){
            $query1 = "SELECT * FROM ch2 WHERE username='$username' AND password='$password'";
            $res1 = mysqli_query($this->conn, $query1);
            $count = mysqli_num_rows($res1);
            if(! $count > 0){
                echo "Invalid Username OR Password";
            }else{
                $row = mysqli_fetch_array($res1);
                session_start();
                $_SESSION['user'] = $username;
                $_SESSION['flag'] = $row['flag'];
                header("Location: flag.php");
            }
        }
    }

    class Session extends Login{
        function __construct(){
            parent::__construct();
            session_start();
            if(! isset($_SESSION['user'])){
                http_response_code("403");
                header("Location: login.php");
            }
        }
    }

    class Flag extends Session{
        function getFlag(){
            parent::__construct();
            session_start();
            if(isset($_SESSION['flag'])){
                echo "Your Flag is " . $_SESSION['flag'];
            }
        }
    }

    class Signup extends Connection{
        function Sign($username, $password, $confpassword){
            if($password == $confpassword){
                $query1 = "SELECT * FROM ch2 WHERE username='$username'";
                $res1 = mysqli_query($this->conn, $query1);
                $count = mysqli_num_rows($res1);
                if($count > 0){
                    echo "Username Already Registerd";
                }else{
                    $query2 = "INSERT INTO ch2(username, password) VALUES ('$username', '$password')";
                    //$res2 = mysqli_query($this->conn, $query2);
                    echo "Success";
                }   
            }else{
                echo "Password Doesn't Match";
            }
        }
    }
?>