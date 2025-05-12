<?php
include_once BASE_PATH . '/db/Database.php';
class DB {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    // Get data from table
    public function getAll($table, $fields = ['*']) {
        $fieldStr = implode(', ', $fields);
        $sql = "SELECT $fieldStr FROM $table";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Insert into table
    public function insert($table, $data = []) {
        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));

        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        $stmt = $this->conn->prepare($sql);

        $bindings = [];
        foreach ($data as $key => $value) {
            $bindings[":$key"] = $value;
        }

        return $stmt->execute($bindings);
    }

    // Update table row by ID
    public function updateById($table, $id, $data = [], $idField = 'id') {
        $setParts = [];
        $bindings = [];

        foreach ($data as $key => $value) {
            $setParts[] = "$key = :$key";
            $bindings[":$key"] = $value;
        }

        $bindings[":id"] = $id;

        $setStr = implode(', ', $setParts);
        $sql = "UPDATE $table SET $setStr WHERE $idField = :id";

        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($bindings);
    }

    // Delete row by ID
    public function deleteById($table, $id, $idField = 'id') {
        $sql = "DELETE FROM $table WHERE $idField = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
}
?>
