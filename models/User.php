<?php

class Database {
    private $conn;

    function __construct($host, $username, $password, $dbname) {
        $this->conn = new mysqli($host, $username, $password, $dbname);

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

    public function select($table, $columns = '*', $where = '') {
        $sql = "SELECT $columns FROM $table";

        if (!empty($where)) {
            $sql .= " WHERE $where";
        }

        $result = $this->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }

    public function insert($table, $data) {
        $columns = implode(',', array_keys($data));
        $values = implode(',', array_map(array($this->conn, 'real_escape_string'), array_values($data)));
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";

        $result = $this->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function update($table, $data, $where) {
        $set = '';

        foreach ($data as $column => $value) {
            $set .= "$column='" . $this->conn->real_escape_string($value) . "',";
        }

        $set = rtrim($set, ',');
        $sql = "UPDATE $table SET $set WHERE $where";

        $result = $this->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($table, $where) {
        $sql = "DELETE FROM $table WHERE $where";

        $result = $this->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}

// usage example:

$db = new Database('localhost', 'username', 'password', 'database_name');

// Select
$users = $db->select('users');
if ($users) {
    foreach ($users as $user) {
        echo "ID: " . $user['id'] . ", Name: " . $user['name'] . ", Email: " . $user['email'] . "<br>";
    }
} else {
    echo "No users found.";
}

// Create
$created = $db->insert('users', array('name' => 'John Doe', 'email' => 'john@example.com'));
if ($created) {
    echo "User created successfully.";
} else {
    echo "User creation failed.";
}

// Update
$updated = $db->update('users', array('name' => 'Jane Doe', 'email' => 'jane@example.com'), 'id=1');
if ($updated) {
    echo "User updated successfully.";
} else {
    echo "User update failed.";
}

// Delete
$deleted = $db->delete('users', 'id=1');
if ($deleted) {
    echo "User deleted successfully.";
} else {
    echo "User deletion failed.";
}

?>
