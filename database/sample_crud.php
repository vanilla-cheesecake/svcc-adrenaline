<?php

/*

In this example, we first create an instance of the `DBConnection` class to establish a connection to the database. We then create an instance of the `CRUD` class, passing in the database connection object. We use the `create()` method to insert a new record into the database, the `read()` method to retrieve all records, the `update()` method to update an existing record, and the `delete()` method to delete a record. Finally, we output a message indicating whether each operation was successful or not.

*/

require_once 'DBConnection.php';
require_once 'CRUD.php';

$db = new DBConnection();
$crud = new CRUD($db->getConnection());

// Create a record
$data = array(
  'field1' => 'value1',
  'field2' => 'value2',
  'field3' => 'value3'
);

if($crud->create($data)) {
  echo "Record created successfully";
} else {
  echo "Error creating record";
}

// Read records
$rows = $crud->read();

foreach($rows as $row) {
  echo $row['id'] . " " . $row['field1'] . " " . $row['field2'] . " " . $row['field3'] . "<br>";
}

// Update a record
$id = 1;
$data = array(
    'field1' => 'updated value1',
    'field2' => 'updated value2',
    'field3' => 'updated value3'
    );

    if($crud->update($id, $data)) {
        echo "Record updated successfully";
        } else {
        echo "Error updating record";
        }
        
        // Delete a record
        $id = 2;
        
        if($crud->delete($id)) {
        echo "Record deleted successfully";
        } else {
        echo "Error deleting record";
        }
?>