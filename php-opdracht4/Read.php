<?php
class Read
{
    private $db;
    private $tableItem;
    private $tableName;
    private $rowIndex;

    public function __construct($conn, String $tableItem, String $tableName, String $rowIndex)
    {
        $this->db = $conn;
        $this->tableItem = $tableItem;
        $this->tableName = $tableName;
        $this->rowIndex = $rowIndex;
        $this->executeRead();
    }

    public function executeRead()
    {

        $query = "SELECT " . $this->tableItem . " FROM " . $this->tableName;
        $result = $this->db->connection->query($query);
        $outputArray = array();
        while ($row = $result->fetch_assoc()) {
            array_push($outputArray, $row[$this->rowIndex]);
        }
        return $outputArray;
    }
}
