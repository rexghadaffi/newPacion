<?php

class DataAccessLayer
{
 
    private $_server = 'localhost';
    private $_username = 'root';
    private $_password = '';
    private $_database = 'db_alumni';
    public  $debug = false;
 
    
    private $_conn;
 
    function __construct() {
        $this->_conn = new mysqli($this->_server, $this->_username, $this->_password, $this->_database);
 
       
        if (mysqli_connect_errno()) {
            printf('Connect failed: %s\n', mysqli_connect_error());
            exit();
        }
 
        
        if (!$this->_conn->set_charset('utf8')) {
            printf('Error loading character set utf8: %s\n', $this->_conn->error);
        }
    }
 
    function __destruct() {
        $this->_conn->close();
    }
 
    
    public function error() {
        return $this->_conn->errno . ': ' . $this->_conn->error;
    }
 
   
    public function totalRows($field, $table) {
        $sql = 'select ' . $field . ' from '
        . $table;
 
        $result = $this->_conn->query($sql);
 
        
        return $result->num_rows;
    }
 
    public function query($sql) {
        
        if($this->debug) {
            echo '<h3>Query</h3>';
            echo '<div>';
            echo $sql;
            echo '</div>';
        }
 
       
        return $this->_conn->query($sql);
    }
 
    public function queryLimit($sql, $page, $pageCount) {
        $sql .= ' limit ' . $page . ', ' . $pageCount;
 
      
        return $this->query($sql);
    }
 
    public function nonQuery($sql) {
       
        $this->query($sql);
 
        return $this->_conn->affected_rows;
    }
 
    public function select($table) {
        $sql = 'select * from '
        . $table;
 
       
        return $this->query($sql);
    }

   
    public function selectFields($table, $parameters) {
        $sql = 'select ';
 
      
        foreach ($parameters as $key => $value) {
            $sql .= $value;
 
            if($key != end(array_keys($parameters))){
                $sql .= ', ';
            }
        }
 
        $sql .= ' from ' . $table;
 
       
        return $this->query($sql);
    }
 
    public function selectById($table, $idName, $idValue) {
            $sql = 'select * from '
            . $table
            . ' where '
            . $idName
            . ' = '
            . $idValue;
 
          
            return $this->query($sql);
    }
	
	
 
    public function selectByIdOrder($table, $idName, $idValue, $order) {
            $sql = 'select * from '
            . $table
            . ' where '
            . $idName
            . ' = '
            . $idValue
            . ' order by ' . $order;
 
       
            return $this->query($sql);
    }
 
    public function selectColumnWhere($table, $idName, $idValue) {
            $sql = 'select * from '
            . $table
            . ' where '
            . $idName
            . ' = '
            . $idValue;   
            return $this->query($sql);
    }
	
	
    public function selectColumnWhereStatus($table, $idName, $idValue, $status) {
            $sql = 'select * from '
            . $table
            . ' where '
            . $idName
            . ' = '
            . $idValue
			. ' and '
			. $status
			. ' = '
			. 1;
			
            return $this->query($sql);
    }	
	
    public function selectWhere($table, $parameters, $where) {
            $sql = 'select ';
 
          
            foreach ($parameters as $key => $value) {
                    $sql .= $value;
 
                    if($key != end(array_keys($parameters))){
                            $sql .= ', ';
                    }
            }
 
            $sql .= ' from ' . $table
            .= ' where ' . $where;
 
            
            return $this->query($sql);
    }
 
    public function selectWhereOrder($table, $where, $order) {
        $sql = 'select *'
             . ' from ' . $table
             . ' where ' . $where
             . ' order by ' . $order;
 
      
        return $this->query($sql);
    }
 
    public function selectFieldsWhereOrder($table, $parameters, $where, $order) {
        $sql = 'select ';
 
       
        foreach ($parameters as $key => $value) {
            $sql .= $value;
 
            if($key != end(array_keys($parameters))){
                    $sql .= ', ';
            }
        }
 
        $sql .= ' from ' . $table
        . ' where ' . $where
        . ' order by ' . $order;
 
       
        return $this->query($sql);
    }
 
    public function selectOrder($table, $order) {
        $sql = 'select * from '
        . $table
        . ' order by ' . $order;
 
        
        return $this->query($sql);
    }
 
    public function selectFieldsOrder($table, $parameters, $order) {
        $sql = 'select ';
 
       
        foreach ($parameters as $key => $value) {
            $sql .= $value;
 
            if($key != end(array_keys($parameters))){
                $sql .= ', ';
            }
        }
 
        $sql .= ' from ' . $table
        .= ' order by ' . $order;
 
        
        return $this->query($sql);
    }
 
    
    public function search($table, $fieldsToSearch, $search) {
            $searchWords = explode(' ', $search);
 
            $sql = 'select *';
 
            $sql .= ' from ' . $table . ' where ';
 
           
            foreach($searchWords as $wKey => $wValue) {
                    $sql .= '(';
 
                    foreach ($fieldsToSearch as $key => $value) {
                            $sql .= $value . ' like \'%' . $wValue . '%\'';
 
                            if($key != end(array_keys($fieldsToSearch))){
                                    $sql .= ' or ';
                            }
                    }
 
                    if($wKey != end(array_keys($searchWords))){
                            $sql .= ') and ';
                    } else {
                            $sql .= ')';
                    }
            }
 
            
            return $this->query($sql);
    }
 
    
    public function searchFields($table, $fields, $fieldsToSearch, $search) {
            $searchWords = explode(' ', $search);
 
            $sql = 'select ';
 
            
            foreach ($fields as $key => $value) {
                    $sql .= $value;
 
                    if($key != end(array_keys($fields))){
                            $sql .= ', ';
                    }
            }
 
            $sql .= ' from ' . $table . ' where ';
 
            
            foreach($searchWords as $wKey => $wValue) {
                    $sql .= '(';
 
                    foreach ($fieldsToSearch as $key => $value) {
                            $sql .= $value . ' like \'%' . $wValue . '%\'';
 
                            if($key != end(array_keys($fieldsToSearch))){
                                    $sql .= ' or ';
                            }
                    }
 
                    if($wKey != end(array_keys($searchWords))){
                            $sql .= ') and ';
                    } else {
                            $sql .= ')';
                    }
            }
 
           
            return $this->query($sql);
    }
 
    
    public function searchKeyConstrain($table, $fieldsToSearch, $search, $keyId, $keyValue) {
            $searchWords = explode(' ', $search);
 
            $sql = 'select *';
 
            $sql .= ' from ' . $table . ' where ';
 
            
            foreach($searchWords as $wKey => $wValue) {
                    $sql .= '(';
 
                    foreach ($fieldsToSearch as $key => $value) {
                            $sql .= $value . ' like \'%' . $wValue . '%\'';
 
                            if($key != end(array_keys($fieldsToSearch))){
                                    $sql .= ' or ';
                            }
                    }
 
                    if($wKey != end(array_keys($searchWords))){
                            $sql .= ') and ';
                    } else {
                            $sql .= ')';
                    }
            }
 
            $sql .= ' and ' . $keyId . ' = ' . $keyValue;
 
           
            return $this->query($sql);
    }
 
 
    public function searchQuery($sql, $fieldsToSearch, $search) {
            $searchWords = explode(' ', $search);
 
            $sql .= ' where ';
 
           
            foreach($searchWords as $wKey => $wValue) {
                    $sql .= '(';
 
                    foreach ($fieldsToSearch as $key => $value) {
                            $sql .= $value . ' like \'%' . $wValue . '%\'';
 
                            if($key != end(array_keys($fieldsToSearch))){
                                    $sql .= ' or ';
                            }
                    }
 
                    if($wKey != end(array_keys($searchWords))){
                            $sql .= ') and ';
                    } else {
                            $sql .= ')';
                    }
            }
 
           
            return $this->query($sql);
    }
 
 
    public function searchQueryOrder($sql, $fieldsToSearch, $search, $order) {
            $searchWords = explode(' ', $search);
 
            $sql .= ' where ';
 
     
            foreach($searchWords as $wKey => $wValue) {
                    $sql .= '(';
 
                    foreach ($fieldsToSearch as $key => $value) {
                            $sql .= $value . ' like \'%' . $wValue . '%\'';
 
                            if($key != end(array_keys($fieldsToSearch))){
                                    $sql .= ' or ';
                            }
                    }
 
                    if($wKey != end(array_keys($searchWords))){
                            $sql .= ') and ';
                    } else {
                            $sql .= ')';
                    }
            }
 
            $sql .= $order;
 
            
            return $this->query($sql);
    }
 
   
    public function insert($table, $parameters) {
 
            $sql = 'insert into '
            . $table
            . ' (';
 
            
            foreach ($parameters as $key => $value) {
                    $sql .= $key;
 
                    if($key != end(array_keys($parameters))){
                            $sql .= ', ';
                    }
            }
 
            $sql .= ') values (';
 
            
            foreach ($parameters as $key => $value) {
                    $sql .= '\'' . $value . '\'';
 
                    if($key != end(array_keys($parameters))){
                            $sql .= ', ';
                    }
            }
 
            $sql .= ') ';
 
            
            $this->query($sql);
 
            return $this->_conn->insert_id;
    }
 
    public function insertQuery($sql) {
           
            $this->query($sql);
 
            return $this->_conn->insert_id;
    }
 
    
    public function updateById($table, $parameters, $idName, $idValue) {                                    
        $sql = 'update '
        . $table
        . ' set ';
 
        
        foreach ($parameters as $key => $value) {
                $sql .= $key . ' = \'' . $value . '\'';
 
                if($key != end(array_keys($parameters))){
                        $sql .= ', ';
                }
        }
 
        $sql .= ' where '
        . $idName . ' = ' . $idValue;
 
        
        $this->query($sql);
 
        return $this->_conn->affected_rows;
    }
 
    public function updateWhere($table, $parameters, $what, $wValue) {                                    
        $sql = 'update '
        . $table
        . ' set ';
 
        
        foreach ($parameters as $key => $value) {
                $sql .= $key . ' = \'' . $value . '\'';
 
                if($key != end(array_keys($parameters))){
                        $sql .= ', ';
                }
        }
 
        $sql .= ' where '
        . $what . ' = \'' . $wValue . '\'';
 
        
        $this->query($sql);
 
        return $this->_conn->affected_rows;
    }
 
    public function deleteById($table, $idName, $idValue) {                                   
        $sql = 'delete from '
        . $table
        . ' where '
        . $idName . ' = ' . $idValue;
 

        $this->query($sql);
 
        return $this->_conn->affected_rows;
    }


    public function GetUserDetails($username, $password, $tableName)
    {
        $sql = "SELECT userID, userName, userPassword, userStatus, userTypeID FROM " 
        . $tableName . " where userName = '" . $username . "' AND userPassword = '" . $password . "' ";

        $userArray =  $this->query($sql)->fetch_row();  

        return $userArray; 
    }
	
	public function CountRow($table, $columnparam, $id)
	{
		$sql = "SELECT * from ".$table." where ".$columnparam." = ".$id." ";
		$count = $this->query($sql)->num_rows;
		return $count;
	}
	
	public function selectColumn($col, $table, $columnparam, $id, $level)
	{
		$sql = "SELECT ".$col." from ".$table." where ".$columnparam." = ".$id." ";
		$result = $this->query($sql);
		$row = mysqli_fetch_array($result);
		if($level == 1)
		{	
		return $row["userName"];
		}
		else
		{
		return $row["userFirstName"];				
		}
	}
	
	public function selectColumnImage($col, $table, $columnparam, $id)
	{
		$sql = "SELECT ".$col." from ".$table." where ".$columnparam." = ".$id." ";
		$result = $this->query($sql);
		$row = mysqli_fetch_array($result);
		return $row["userImage"];
	}	

}
?>