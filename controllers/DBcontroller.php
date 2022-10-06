<?php
class DBcontroller{
    public $dbHost="localhost";
    public $dbUser="root";
    public $dbPassword="";
    public $dbName="aaa";
    public $connection;

    public function openConnection(){
            $this->connection=new mysqli($this->dbHost,$this->dbUser,$this->dbPassword,$this->dbName);
            if ($this->connection->connect_error){
                echo"error in connection".$this->connection->connect_error;
                return false;

            }
            else {
                return true;
            }  
    }
    public function closeConnection(){

        if($this->connection){
            $this->connection->close();
        }
        else {
            echo"connection is not opend";
        }
    }
    public function select ($qry){
        $result=$this->connection->query($qry);
        if(!$result){
            echo "Error : ".mysqli_error($this->connection);
            return false;
        }
        else{
          return $result->fetch_all(MYSQLI_ASSOC);
        }
    }
    public function insert ($qry){
        $result=$this->connection->query($qry);
        if(!$result){
            echo "Error : ".mysqli_error($this->connection);
            return false;
        }
        else{
          return true;
        }
    }
    public function delete($qry){
        $result=$this->connection->query($qry);
        if(!$result){
            echo "Error : ".mysqli_error($this->connection);
            return false;
        }
        else{
          return true;
        }
    }
    public function read ($qry){
        $result=$this->connection->query($qry);
        if(!$result){
            echo "Error : ".mysqli_error($this->connection);
            return false;
        }
        else{
          $final=mysqli_fetch_all($result,MYSQLI_ASSOC);
          return $final;
        }
    }
    public function edit($qry){
        $result=$this->connection->query($qry);
        if(!$result){
            echo "Error : ".mysqli_error($this->connection);
            return false;
        }
        else{
          return true;
        }
    }
}


?>