<?php
class Category {

	private $con, $id, $amount, $offset, $sqlData;

	public function __construct($con, $id, $amount, $offset = 0) {
		$this->con = $con;
		$this->id = $id;
		$this->amount = $amount;
		$this->offset = $offset;

		$query = $this->con->prepare("SELECT * FROM categories WHERE id = :id");
        $query->bindParam(":id", $id);
        $query->execute();

        $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
	}

	public function getName() {
		return $this->sqlData["name"];
	}

	public function getQuotes() {
		$query = $this->con->prepare("SELECT * FROM quotes WHERE category = :id LIMIT $this->offset, $this->amount");
        $query->bindParam(":id", $this->id);
        $query->execute();
        $quotes = $query->fetchAll();
        return $quotes;
	}
}