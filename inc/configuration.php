<?php 

class Sql {
    public $conn;


    public function __construct(){
        return $this->conn = mysqli_connect("127.0.0.1", "pedro", "Pedro1001@", "hcode_shop");
        
    }
    public function query($string_query){
        return mysqli_query($this->conn, $string_query);
    }

    public function select($string_query){

        $result = $this->query($string_query);
        $data = array();

        while($row = mysqli_fetch_array($result)){
            array_push($data, $row);
        }
        unset($result);

        return $data;
    
    }


    public function __destruct(){
        mysqli_close($this -> conn);
    }
}





?>