<?php

namespace App\Core\Database;

use App\Core\App;
use App\Core\Database\Connection;
use PDO;

class QueryBuilder 
{

    protected $_pdo;
    
    protected $_statement;

    protected $_query;

    protected $_fields;


	public function __construct()
	{
		$this->_pdo = Connection::make(App::get('config')['database']);
	}


	public function select()
    {
        $this->_statement = "SELECT * FROM $this->table ";

        return $this;
    }

    public function where($params = [])
    {
           if (count($params) === 3) {
            
            $operators = ['=', '>', '<', '>=', '<=', 'LIKE'];

            $field = $params[0];
            $operator = $params[1];
            $value = $params[2];

            if (in_array($operator, $operators)) {

                $this->_statement .= " WHERE {$field} {$operator} '{$value}'";

                return $this;
            } 

        }

        //if where exist put where
    }

    public function and($params = [])
    {

           if (count($params) === 3) {
            
            $operators = ['=', '>', '<', '>=', '<=', 'LIKE'];

            $field = $params[0];
            $operator = $params[1];
            $value = $params[2];

            if (in_array($operator, $operators)) {

               $this->_statement .= " AND {$field} {$operator} '{$value}'";

                return $this;
            } 

        }

    }

    public function limit($number)
    {
        $this->_statement .= " LIMIT {$number}";

        return $this;
    }

    

    public function join($table, $field1, $operator, $field2)
    {
        $this->_statement .= " INNER JOIN {$table} ON {$field1} {$operator} {$field2}";

        return $this;
    }



    public function execute() // return true or false
    {
        
        if($this->_query = $this->_pdo->prepare($this->_statement)) {

           $this->bindFields($this->_fields);

             if ($this->_query->execute()) {

                 return true;

            }
            return false;

        }
        
    }


    public function get()
    {
        if ($this->execute()) {
            return $this->_query->fetchAll(PDO::FETCH_OBJ);
        }

    }



    public function update($parameters = [], $id, $field)
    { 

        $this->_statement = sprintf('UPDATE %s SET %s WHERE %s = ' . $id, 

                $this->table,

                implode(' = ?, ', array_keys($parameters)) . ' = ? ',

            $field
        );

        $this->_fields = $parameters;

        return $this;


    }



    public function insert($params)
    {

        $values = '';

        $x = 1;

        foreach ($params as $field) {
            
             $values .= '?';
            
            if ($x < count($params)) {

                    $values .= ', ';
            }

             $x++;
        }

        $this->_statement = "INSERT INTO $this->table (" . implode(', ', $this->fillables) . ") VALUES ({$values})";

        $this->_fields = $params;

        return $this;

         
    }

    public function bindFields($fields = [])
    {

        if ($fields != null) {

            $x = 1;

            foreach ($fields as $value) {
               
               $this->_query->bindvalue($x,$value);

                $x++;
            }

            return $this;

        }
        
    }


    public function delete($id, $field)
    {

        $this->_statement = sprintf('DELETE FROM %s WHERE %s = '.$id, $this->table, $field);

        return $this;

    }




    public function filterRequest($requests)
    {

        $fields = [];

        foreach ($requests as $key => $value) {       

            //if exist in fillables check then return values

            if (in_array($key, $this->fillables)) {

                $fields[$key] = $value;

            }

        }
        return $fields;

    }


}
