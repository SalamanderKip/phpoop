<?php
include_once './components/Database.php';

class Product {
    private $connection;
    private $tableName = null;
    private $tableItem = null;
    private $rowId = null;
    private $pName = null;
    private $pDescription = null;
    private $pPrice = null;
    private $pDateAdded = null;
    private $pDateChanged = null;
    private $pCollumn = null;
    private $pValue = null;

    public function __construct($db) {
        $this->connection = $db;
    }

    public function read(String $tableItem, String $tableName) {
        $this->tableItem = $tableItem;
        $this->tableName = $tableName;
        $query = "SELECT " . $this->tableItem . " FROM " . $this->tableName;
        $result = $this->connection->query($query);
        return $result;
    }

    public function create(String $tableName, int $rowId, String $pName, String $pDescription, String $pPrice, String $pDateAdded, String $pDateChanged) {
        $this->tableName = $tableName;
        $this->rowId = $rowId;
        $this->pName = $pName;
        $this->pDescription = $pDescription;
        $this->pPrice = $pPrice;
        $this->pDateAdded = $pDateAdded;
        $this->pDateChanged = $pDateChanged;
        $query = "INSERT INTO " . $this->tableName . "(cid, name, description, price, date_added, date_changed)
        VALUES (" . $this->rowId . ", '" . $this->pName . "', '" . $this->pDescription . "', '" . $this->pPrice . "', '" . $this->pDateAdded . "', '" . $this->pDateChanged . "')";
        $result = $this->connection->query($query);
        return $result;
    }

    public function delete(String $tableName, int $rowId) {
        $this->tableName = $tableName;
        $this->rowId = $rowId;
        $query = "DELETE FROM " . $this->tableName . " WHERE id=" . $this->rowId;
        $result = $this->connection->query($query);
        return $result;
    }

    public function update(String $tableName, int $pCollumn, String $pValue, int $rowId) {
        $this->tableName = $tableName;
        $this->pCollumn = $pCollumn;
        $this->pValue = $pValue;
        $this->rowId = $rowId;
        $query = "UPDATE " . $this->tableName . " SET " . $this->pCollumn . " = " ."'". $this->pValue ."'". "WHERE id = ". $this->rowId ;
        $result = $this->connection->query($query);
        return $result;
    }
}