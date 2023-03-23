<?php

class Database {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    public function __construct($servername, $username, $password, $dbname) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql) {
        $result = $this->conn->query($sql);

        if (!$result) {
            die("Query failed: " . $this->conn->error);
        }

        return $result;
    }

    public function select($table, $columns = "*", $where = "1", $orderBy = "", $limit = "") {
    $sql = "SELECT " . $columns . " FROM " . $table . " WHERE " . $where;

    if (!empty($orderBy)) {
        $sql .= " ORDER BY " . $orderBy;
    }

    if (!empty($limit)) {
        $sql .= " LIMIT " . $limit;
    }

    $result = $this->query($sql);

    if (!$result) {
        die("Select failed: " . $this->conn->error);
    }

    $rows = array();

    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }

    return $rows;
}


    public function insert($table, $data) {
        $keys = array_keys($data);
        $values = array_values($data);

        $sql = "INSERT INTO " . $table . " (" . implode(", ", $keys) . ") VALUES ('" . implode("', '", $values) . "')";

        if (!$this->query($sql)) {
            die("Insert failed: " . $this->conn->error);
        }

        return $this->conn->insert_id;
    }

    public function update($table, $data, $where) {
    $set = array();

    foreach ($data as $key => $value) {
        $set[] = $key . " = '" . $value . "'";
    }

    $sql = "UPDATE " . $table . " SET " . implode(", ", $set) . " WHERE " . $where;

    if (!$this->query($sql)) {
        die("Update failed: " . $this->conn->error);
    }

    return true;
}

public function delete($table, $where) {
    $sql = "DELETE FROM " . $table . " WHERE " . $where;

    if (!$this->query($sql)) {
        die("Delete failed: " . $this->conn->error);
    }

    return true;
}


    public function close() {
        $this->conn->close();
    }

}

?>