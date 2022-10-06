<?php 
    require_once 'F:\xampp\htdocs\project_php\Models\person.php';
    class User extends Person{
        /*public  $username;
        public  $password;*/
        public  $gender;
        public  $day_of_birth;
        public  $month_of_birth;
        public  $year_of_birth;
        /*public function getUsername(){
            return $this->username;
        }
        public function setUsername($username){
            $this->username=$username;
        }
        public function getPassword(){
            return $this->password;
        }
        public function setPassword($password){
            $this->password=$password;
        }
        public function getDateOfBirth(){
            return $this->day_of_birth.'-'.$this->month_of_birth.'-'.$this->year_of_birth;
        }
        public function setDateOfBirth($day,$month,$year){
            $this->day_of_birth=$day;
            $this->month_of_birth=$month;
            $this->year_of_birth=$year;
        }
        public function getGender(){
            return $this->gender;
        }
        public function setGender($gender){
            $this->gender=$gender;
        }*/
    }
?>