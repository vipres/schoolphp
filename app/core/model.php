<?php

namespace app\Core;

class Model extends Database {



    public function __construct(){

        if(!property_exists($this, 'table'))
        {
            $name= $this->getName($this::class);
            $name= strtolower($name)."s";
            $this->table = $name;

        }


    }

    public function getName($name) {
        $path = explode('\\', $name);
        return array_pop($path);
    }

    public function where($column, $value)
    {
        $column =addslashes($column);
        $query = "select * from $this->table where $column = :value";
        return $this->query($query, [

            'value'=>$value,
        ]);
    }
    public function findAll()
    {
        $query = "select * from $this->table ";
        return $this->query($query);
    }
    public function insert($data)
    {
        $keys = array_keys($data);
        $columns = implode(',', $keys);
        $values =implode(',:', $keys);

        $query ="INSERT INTO $this->table ($columns) VALUES (:$values)";

        return $this->query($query, $data);
    }
    public function update($id, $data)
    {
        $column =addslashes($column);
        $query = "select * from $this->table where $column = :value";
        return $this->query($query, [

            'value'=>$value,
        ]);
    }
    public function delete($id)
    {
        $column =addslashes($column);
        $query = "select * from $this->table where $column = :value";
        return $this->query($query, [

            'value'=>$value,
        ]);
    }
}
