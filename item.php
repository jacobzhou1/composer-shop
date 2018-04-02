<?php

class Item {
	private $id;
	private $name;
	private $price;
	private $img_url;
	private $description;

	function __construct($name = "", $price = 0, $url = "", $description = "") {
		$this->name = $name;
		$this->price = $price;
		$this->img_url = $url;
		$this->description = $description;
	}

	// DB data  -> item object
	public function arrayAdapter ($row) {
		$this->id = $row['id'];
		$this->name = $row['name'];
		$this->price = $row['price'];
		$this->img_url = $row['image_url'];
		$this->description = $row['description'];

		return $this;
	}


	public static function test($r) {
		return 3 * $r;
	}

	public function getId() {
		return $this->id;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		return $this;
	}

	public function getPrice() {
		return $this->price;
	}

	public function setPrice($price) {
		$this->price = $price;
		return $this;
	}

	public function getImgUrl() {
		return $this->img_url;
	}

	public function setImgUrl($url) {
		$this->url = $url;
		return $this;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}
}
?>