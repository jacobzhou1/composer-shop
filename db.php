<?php
require_once('item.php');

class DBConnection {
	private $conn;

	// Return a connection instance
	private function getConnInstance() {
		if (!$this->conn) {
			$this->conn = new PDO('mysql:host=localhost;dbname=Shop_Assignment;charset=utf8mb4', 'root', 'root');
		}

		return $this->conn;
	}

	// Get All Items, return Array -> v1
	public function getAllItemsReturnArr() {
		$stmt = $this->getConnInstance()->query("SELECT * FROM Item");
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	// Get All Items, return Object Item Class -> v2
	public function getAllItemsReturnObj() {
		$this->getConnInstance();
		$stmt = $this->conn->query("SELECT * FROM Item");
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$items = array();
		foreach ($result as $row) {
			$item = new Item();
			// $item->setName($row['name']);
			$items[] = $item->arrayAdapter($row);
		}

		return $items;
	}


}





?>