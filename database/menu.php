<?php


//used to fetch menu items
class Menu 
{
    public $db =null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;

        $this->db = $db;

    }

    //fetch product data using get data method
    public function getData($table = 'menu'){
        $result = $this->db->con->query("SELECT * FROM  {$table}");

        $resultArray= array();

        //fetch menu item one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }

        return $resultArray;

    }
}