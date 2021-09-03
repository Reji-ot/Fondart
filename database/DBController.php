<?php

class DBController 
{

    // Database connection properties
    // protected $host = '184.168.100.242';
    // protected $user = 'fondart';
    // protected $password = 'Fart$6789';
    // protected $database = 'fondart';

    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'fondart';

    // connection properties
    public $con =null; 



    // call connection
    public function __construct()
    {
        $this->con=mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if($this->con->connect_error){
            echo "Fail".$this->con->connect_error;    
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing connection
    protected function closeConnection(){
        if($this->con!= null){
            $this->con->close();
            $this->con = null;
        }
    }

}

