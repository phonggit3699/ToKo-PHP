<?php

class database
{
    protected $connection = null;
    protected $user = 'root';
    protected $pass = '';
    protected $host = 'localhost';
    protected $dbname = 'toko';
    protected $table ='';
    protected $statement;
    protected $condition = "";
    public $limit = 10;

    

    public function __construct()
    {
        $this->connection();
    }

    protected function connection()
    {
        $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        // Check connection
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function table($tableName){
        $this->table = $tableName;
        return $this;
    }
//---------------------------------------------------SELECT-------------------------//
    public function selectALL()
    {
        $sql = "SELECT * FROM $this->table";

        $this->statement = $this->connection->prepare($sql);

        $this->statement->execute();

        $this->resetQuery();

        $result = $this->statement->get_result();


        $resultData = [];

        while($rows = $result->fetch_object()) {
                $resultData[] = $rows;
        }
        return $resultData;

        $this->statement->close();
    }


    public function select($lm,$pp)
    {
    $sql = "SELECT * FROM $this->table ORDER BY date DESC LIMIT $lm OFFSET {$pp}";

        $this->statement = $this->connection->prepare($sql);

        $this->statement->execute();

        $this->resetQuery();

        $result = $this->statement->get_result();


        $resultData = [];

        while($rows = $result->fetch_object()) {
                $resultData[] = $rows;
        }
        return $resultData;

        $this->statement->close();
    }

    public function selectByCateGory($lm,$pp, $c)
    {
    $sql = "SELECT * FROM $this->table WHERE category LIKE '%{$c}%' ORDER BY date DESC LIMIT $lm OFFSET {$pp}";

        $this->statement = $this->connection->prepare($sql);

        $this->statement->execute();

        $this->resetQuery();

        $result = $this->statement->get_result();


        $resultData = [];

        while($rows = $result->fetch_object()) {
                $resultData[] = $rows;
        }
        return $resultData;

        $this->statement->close();
    }

    public function selectOne($condition)
    {
        $sql = "SELECT * FROM $this->table WHERE ".$condition." LIMIT 1";

        $this->statement = $this->connection->prepare($sql);

        $this->statement->execute();

        $this->resetQuery();

        $result = $this->statement->get_result();


        $row = $result->fetch_assoc();
        return $row;

        $this->statement->close();
    }

    //---------------------------------------------------INSERT----------------------------------//
    public function insertAcc($data = [])
    {
        $fields = implode(',', array_keys($data));

        $valuesMark = implode(',' , array_fill(0, count($data), '?'));

        $sql = "INSERT INTO $this->table($fields) VAlUES($valuesMark)";

        $values = array_values($data);

        $this->statement = $this->connection->prepare($sql);

        $this->statement->bind_param(str_repeat('s', count($data)), ...$values);

        $this->statement->execute();

        $this->resetQuery();

        return $this->statement->affected_rows;

        $this->statement->close();
    }

    public function insertBook($data = [])
    {
        $fields = implode(',', array_keys($data));

        $valuesMark = implode(',' , array_fill(0, count($data), '?'));

        $sql = "INSERT INTO $this->table($fields) VAlUES($valuesMark)";

        $values = array_values($data);

        $this->statement = $this->connection->prepare($sql);

        $this->statement->bind_param('sdssisssss', ...$values);

        $this->statement->execute();

        $this->resetQuery();

        return $this->statement->affected_rows;

        $this->statement->close();
    }

    public function insertCart($data = [])
    {
        $fields = implode(',', array_keys($data));

        $valuesMark = implode(',' , array_fill(0, count($data), '?'));

        $sql = "INSERT INTO $this->table($fields) VAlUES($valuesMark)";

        $values = array_values($data);

        $this->statement = $this->connection->prepare($sql);

        $this->statement->bind_param('sdisssss', ...$values);

        $this->statement->execute();

        $this->resetQuery();

        return $this->statement->affected_rows;

        $this->statement->close();
    }

    //---------------------------------------------------UPDATE----------------------------------//

    public function updateById($id, $user, $name, $password)
    {
        $intID = (int) $id;
        $sql = "UPDATE $this->table SET user =?, name= ?, password =? WHERE id= ? ";
        
        $this->statement = $this->connection->prepare($sql);

        $this->statement->bind_param("sssi", $user, $name, $password, $intID);

        $this->statement->execute();

        $this->resetQuery();

        return $this->statement->affected_rows;

        $this->statement->close();
    }

    public function updateUsById($id, $user, $name,$phone, $address, $password)
    {
        $intID = (int) $id;
        $sql = "UPDATE $this->table SET user =?, name= ?,phone =?,address=? , password =? WHERE id= ? ";
        
        $this->statement = $this->connection->prepare($sql);

        $this->statement->bind_param("sssssi", $user, $name,$phone, $address, $password, $intID);

        $this->statement->execute();

        $this->resetQuery();

        return $this->statement->affected_rows;

        $this->statement->close();
    }

    public function updateBookById($id, $name, $price, $author, $des, $quantity, $category,$subcate, $code, $date)
    {
        $intID = (int) $id;
        $intQty = (int) $quantity;
        $fPrice = floatval($price);
        $sql = "UPDATE $this->table 
                SET name =?, price=?, author =?, description=?, quantity=?, category=?,subcategory=?, code=?, date=?
                WHERE id=?";
        
        $this->statement = $this->connection->prepare($sql);

        $this->statement->bind_param("sdssissssi", $name, $fPrice, $author,$des, $intQty, $category,$subcate, $code, $date, $intID);

        $this->statement->execute();

        $this->resetQuery();

        return $this->statement->affected_rows;

        $this->statement->close();
    }

//---------------------------------------------------COUNT----------------------------------//

    public function countCg($condition){
    $sql = "SELECT * FROM $this->table WHERE category LIKE '%$condition%'";

        $this->statement = $this->connection->prepare($sql);

        $this->statement->execute();

        $this->resetQuery();

        $result = $this->statement->get_result();
        return $result->num_rows;
    }

    public function count(){
        $sql = "SELECT * FROM $this->table";

        $this->statement = $this->connection->prepare($sql);

        $this->statement->execute();

        $this->resetQuery();

        $result = $this->statement->get_result();
        return $result->num_rows;
    }

    public function countSubcg($condition){
        $sql = "SELECT * FROM $this->table WHERE subcategory LIKE '%$condition%'";
    
            $this->statement = $this->connection->prepare($sql);
    
            $this->statement->execute();
    
            $this->resetQuery();
    
            $result = $this->statement->get_result();
            return $result->num_rows;
        }



    //---------------------------------------------------DELETE----------------------------------//

    public function deleteRow($id)
    {
        $intId = (int) $id;
        
        $sql = "DELETE FROM $this->table WHERE id = ?";
        
        $this->statement = $this->connection->prepare($sql);

        $this->statement->bind_param("i", $intId);

        $this->statement->execute();

        $this->resetQuery();

        return $this->statement->affected_rows;

        $this->statement->close();
    }
//---------------------------------------------------RESET----------------------------------//
    public function resetQuery(){
        $this->table = "";
    }
}
