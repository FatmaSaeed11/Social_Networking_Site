<?php

//use LDAP\Result;
    require_once 'F:\xampp\htdocs\project_php\Models\person.php';
    require_once 'F:\xampp\htdocs\project_php\Models\user.php';
    require_once 'F:\xampp\htdocs\project_php\controllers\DBcontroller.php';
    class AuthController{
        protected $db;
        public function login(Person $person){
            $this->db=new DBcontroller;
            if($this->db->openConnection()){
                $query1="select * from `user` where user_name ='$person->username' and password = '$person->password'";
                $query2="select * from `admin` where username ='$person->username'and password ='$person->password'";
                
                $result1=$this->db->select($query1);
                $result2=$this->db->select($query2);
                //$resutl2=$this->db->select($query2);
                if(!$result1&&!$result2){
                    //echo 'error in query ';
                    return false;
                }
                else{
                    if($result1){
                        if(count($result1)==0){
                            echo 'you have entered wrong user name or password';
                            return false;
                        }
                        else{
                            //echo 'logged in';
                            /*session_start();
                            $_SESSION["errmsg"]*/
                            //return 1;
                            header("Location: ..\user\userView.php");
                            //return 1;
                        }
                    }
                    else if($result2){
                        if(count($result2)==0){
                            echo 'you have entered wrong user name or password';
                            return false;
                        }
                        else{
                            //echo 'logged in';
                            /*session_start();
                            $_SESSION["errmsg"]*/
                            //return 2;
                            header("Location: ..\admin\adminView.php");
                            //return 1;
                        }
                    }
                }
            }
            else{
                echo"Erro in database connection";
                return false;
            }

        }
        public function register(User $user){
            $this->db=new DBcontroller;
            if($this->db->openConnection())
            {
                $query="insert into user (user_name,password,gender,day,month,year) VALUES ('$user->username','$user->password','$user->gender','$user->day_of_birth','$user->month_of_birth','$user->year_of_birth')";
                $query1="select * from `user` where user_name ='$user->username'";
                $res=$this->db->select($query1);
                $result=false;
                if(!$res){
                    $result=$this->db->insert($query);
                    echo"hey";
                    return true;
                }
                else{
                    if($result!=false){
                        session_start();
                        $_SESSION["usernameInput"]=$user->username;
                        $_SESSION["passwordInput"]=$user->password;
                        $_SESSION["dayOfBirth"]=$user->day_of_birth;
                        $_SESSION["monthOfBirth"]=$user->month_of_birth;
                        $_SESSION["yearOfBirth"]=$user->year_of_birth;
                        $_SESSION["gender"]=$user->gender;
                        return true;
                    }
                    else
                    {
                        //echo "Somthing went wrong.... try again";
                        return false;
                    }
                }
                
            }
        }
        public function addKeyword($keyword,$flag,$username){
            $this->db=new DBcontroller;
            if($this->db->openConnection())
            {
                $query1="select * from `key_word` where description ='$keyword'";
                $result1=$this->db->select($query1);
                if(!$result1)
                {
                    $query2="INSERT INTO `key_word` (`description`, `flag`, `user_name_key`) VALUES ('$keyword', '$flag', '$username')";
                    $result2 =$this->db->insert($query2);
                    return true;
                }
                else
                {
                    return false;

                }
            }
        }
        public function displayKeyword(){
            $this->db=new DBcontroller;
            if($this->db->openConnection()){
                $result=$this->db->read("select * from key_word");
                return $result;
            }
            else return false;
        }
        public function deleteKeyword($keyword){
            $this->db=new DBcontroller;
            if($this->db->openConnection()){
                $query="delete from key_word WHERE description='$keyword'";
                $result=$this->db->delete($query);
                return $result;
            }
            else return false;
        }
        public function addPost($post,$username){
           $this->db=new DBcontroller;
           if($this->db->openConnection()){
               $query="INSERT INTO `topic` (`topic_description`, `topic_user_name`) VALUES ('$post', '$username')";
               $result=$this->db->insert($query);
               return true;
           } 
           else return false;
        }
        public function displayTopic(){
            $this->db=new DBcontroller;
            if($this->db->openConnection()){
                $result=$this->db->read("select * from topic");
                return $result;
            }
            else return false;
        }
        public function addComment($username,$topic_id,$comment){
            $this->db=new DBcontroller;
            if($this->db->openConnection()){
                $query="INSERT INTO `comment` (`user_name`, `topic_id`, `description`) VALUES ('$username', '$topic_id', '$comment')";
                $result=$this->db->insert($query);
                return $result;
            }
            else return false;
        }
        public function displayComment($topic_id){
            $this->db=new DBcontroller;
            if($this->db->openConnection()){
                $result=$this->db->read("select * from comment where `topic_id`='$topic_id'");
                return $result;
            }
            else return false;
        }
        public function deleteTopic($topic_id){
            $this->db=new DBcontroller;
            if($this->db->openConnection()){
                $result=$this->db->delete("DELETE FROM `topic` WHERE topic_id='$topic_id'");
                return $result;
            }
            else return false;
        }
        public function ratePost($comment,$topic_id){
            $ath=new AuthController;
            $keyword=$ath->displayKeyword();
            $comm_arr=explode(" ",$comment);
            $counter=0;
            for($i=0;$i<sizeof($comm_arr);$i++){
                for($j=0;$j<sizeof($keyword);$j++){
                    if(strtolower($comm_arr[$i])==strtolower($keyword[$j]['description'])){
                        if($keyword[$j]['flag']==0){
                            $counter--;
                        }
                        else{
                            $counter++;
                        } 
                    }
                }
            }
            echo"post will be rated ";
            $this->db=new DBcontroller;
            if($this->db->openConnection()){
                $newRate=$this->db->read("SELECT rate FROM `topic` WHERE topic_id='$topic_id'");
                $finalRate=$newRate[0]['rate']+$counter;
                $query="UPDATE `topic` SET `rate` = '$finalRate' WHERE `topic`.`topic_id` = '$topic_id'";
                if($this->db->edit($query)){
                    echo "edited succfully !!!";
                }
                else echo "no rate done ";
            }
            else {
                echo"failed to rate";
            }
        }
    }

?>