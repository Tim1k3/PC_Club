<?php
// session_start();
include('dbconnection.php');
    class User extends Database{
        private $db;
        public function __construct()
        {
            $this->db = $this->createconnection();
        }
        public function login($useremail, $password){
            try{
                $data = array('user_email' => $useremail, 'user_password' => md5($password));
                $sql = 'SELECT * FROM user WHERE meno = :user_email AND password = :user_password';
                $query_run = $this->db->prepare($sql);
                $query_run->execute($data);
                $n_rows = $query_run->rowCount();
                if($n_rows == 1){
                    $_SESSION['logged_in'] = true;
                    $_SESSION['is_admin'] = $query_run->fetch()->role;
                    return true;
                }
                else{
                    return false;
                }
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function register($useremail, $password){
            try{
                $hashed_password = $password;
                $data = array('user_email' => $useremail, 'user_password' => md5($hashed_password), 'user_role'=>'0');
                $sql = "INSERT INTO user (meno, password, role) VALUES (:user_email, :user_password, :user_role)";
                echo $data['user_password'];
                $query_run = $this->db->prepare($sql);
                $query_run->execute($data);
                return true;
            }
            catch(PDOException $e){
                echo "CHyba pri registracii: ".$e->getMessage();
                return false;
            }
        }
    }
?>