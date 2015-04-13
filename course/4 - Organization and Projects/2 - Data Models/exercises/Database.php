<?php
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

    public function insert($data)
    {
        $sql =
            'INSERT INTO test (
                data
            ) VALUES (
                :data
            )';

        $bind = [
            ':data' => $data,
        ];

        $query = $this->db->prepare($sql);
        $query->execute($bind);

        return $this->db->lastInsertId();
    }

    public function update($test_id, $data)
    {
        $sql =
            'UPDATE test
                SET
                    data = :data
                WHERE
                    test_id = :test_id';

        $bind = [
            ':data' => $data,
            ':test_id' => $test_id,
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

        return $query->fetchAssoc();
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

        return $query;
    }
}