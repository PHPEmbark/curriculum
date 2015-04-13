<?php
class Test {
    public $test_id;
    public $data;
    
    public function validateInsert() {
        if(empty($this->data)) {
            return false;
        }
        if(!empty($this->test_id)) {
            return false;
        }
        
        return true;
    }

    public function validateUpdate() {
        if(empty($data)) {
            return false
        }
        if(empty($this->test_id)) {
            return false;
        }
        
        return true;
    }
}

class Database {

    protected $db = null;
    protected $ddl = '
    CREATE TABLE `Test` (
	`test_id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	`data`	        TEXT NOT NULL
        );
    ';

    public function __construct()
    {
        $this->db = new Pdo('sqlite::memory:');
        $this->db->exec($this->ddl);
    }

    public function insert(Test $data)
    {
        if(!$data->validateInsert()) {
            return false;
        }

        $sql =
            'INSERT INTO test (
                data
            ) VALUES (
                :data
            )';

        $bind = [
            ':data' => $data->data,
        ];

        $query = $this->db->prepare($sql);
        $status = $query->execute($bind);

        $data->test_id = $this->db->lastInsertId();
        
        return $status;
    }

    public function update(Test $data)
    {
        if(!$data->validateUpdate()) {
            return false;
        }

        $sql =
            'UPDATE test
                SET
                    data = :data
                WHERE
                    test_id = :test_id';

        $bind = [
            ':data' => $data->data,
            ':test_id' => $data->test_id,
        ];

        $query = $this->db->prepare($sql);
        return $query->execute($bind);
    }

    public function delete($id)
    {
        $sql =
            'DELETE FROM test
                WHERE
                    test_id = :test_id';

        $bind = [
            ':test_id' => $id,
        ];

        $query = $this->db->prepare($sql);
        return $query->execute($bind);
    }

    public function getItem($id)
    {
        $sql =
            'SELECT test_id
                    data
                FROM test
                WHERE test_id = :test_id LIMIT 1';

        $bind = [
            ':test_id' => $id,
        ];

        $query = $this->db->prepare($sql);
        $query->execute($bind);

        return $query->fetchObject('Test');
    }

    public function getAll()
    {
        $sql =
            'SELECT test_id,
                    data
                FROM test
                ORDER BY test_id DESC';

        $query = $this->db->prepare($sql);
        $query->execute();
        $query->setFetchMode(Db::FETCH_CLASS, 'Test');

        return $query;
    }
}