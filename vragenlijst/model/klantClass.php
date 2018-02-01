<?php

class User extends mysqli{
    
    function __construct()
    {
        Parent::__construct("localhost", "root", "", "questionnaire");
        
        if ($this->connect_error) {
        $_SESSION['error']= "DB connection error" . $this->connect_error;
        return;
    }
}
    public function register($data){
        //hash pw
        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        //radom code voor activering
        $token = bin2hex (random_bytes(4));
        
        $q = "SELECT * FROM users WHERE email='$data[email]'";
        $run = $this->query($q);
        
        if ($run->num_rows > 0){
            $_SESSION['error'] = "Email Already Exists.";
            return;
            
        }else{
            $q = "INSERT INTO users (name, email, password, token, active) VALUES ('$data[name]', '$data[email]', '$password', '$token', 0 )";
            $run = $this->query($q);
            
            if ($run){
                $user = $this->getuser($data['email']);
                $_SESSION['id'] = $user->id;
                $this->send_mail($user->email, $user->id, $token);
                header("Location: http://localhost/githubtest/vragenlijst/activate.php");
            }else{
                $_SESSION['error'] = "Something went wrong";
            }
            
        }
    }
    
    //emailadres ophalen voor de mail
    public function getuser ($email){
        $q = "SELECT * FROM users WHERE email='$email'";
        $run = $this->query($q);
        $row = $run->fetch_object();
        return $row;
    }
    
    public function send_mail($email, $id, $token){
        
        $subject = "Account Activation Code";
        
        $headers = "From: test app \r\n";
        $headers .= "Reply -To: no-reply@commercium.nl \r\n";
        $headers .= "CC: abc@abc.com\r\n";
        $headers .= "MIME-Version 1.0 \r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1 \r\n";
        $message = '<html><body>';
        $message .= '<h6>Your Activation Code </h6>';
        $message .= '<h3>' .$token . '</h3>';
        $message .= '<h1>OR</h1>';
        $message .= '<h3>' .$_SERVER['SERVER_NAME']. ':81/vragenlijst/activate.php?active='.$token .'&id='.$id.'</h3>';
        $message .= '</body></html>';
        
        mail($email, $subject, $message, $headers);
    } 
    
    public function activate($id, $token){
        $q = "UPDATE users SET active=1 WHERE id='$id' AND token='$token'";
        $run = $this->query($q);
        if ($run){
            $user = $this->getuserbyid($id);
            $_SESSION['user'] = $user;
            header("Location: http://localhost:81/vragenlijst/intake.php");
        }else{
            $_SESSION['error'] = "Onjuiste code!";
        }
    }
    
    
    public function getuserbyid ($id){
        $q = "SELECT * FROM users WHERE id='$id'";
        $run = $this->query($q);
        $row = $run->fetch_object();
        return $row;
    }
    
    public function auth($email, $password){
        $q = "SELECT id FROM users WHERE email='$email' AND active=1";
        $run = $this->query($q);
        if ($run->num_rows >0){
            $row = $run->fetch_object();
            $q = "SELECT * FROM users WHERE id='$row->id'";
        $run = $this->query($q);
            $row = $run->fetch_object();
            
            if (password_verify($password, $row->password)){
            $_SESSION['user']= $row;
            header("Location: http://localhost/githubtest/vragenlijst/view/index.php");
            }else{
            $_SESSION['error'] = "Password is not valid";
        }
        }else{
            $_SESSION['error'] = "Email does not exit or user is not active";
        }
    }
    
    
}
?>