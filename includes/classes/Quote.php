<?php 
class Quote {

	private $con, $sqlData;

	public function __construct($con, $preview_id) {
		$this->con = $con;

		$query = $this->con->prepare("SELECT * FROM quotes WHERE id = :id");
        $query->bindParam(":id", $preview_id);
        $query->execute();

        $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
	}

	public function getId() {
		return $this->sqlData["id"];
	}

	public function getQuote() {
		return $this->sqlData["quote"];
	}

	public function getAuthor() {
		return $this->sqlData["author"];
	}

	public function getCategory() {
		return $this->sqlData["category"];
	}

	public function getSource() {
		return $this->sqlData["source"];
	}

	public function getViews() {
		return $this->sqlData["views"];
	}

	public function getUploadDate() {
		return $this->sqlData["uploadDate"];
	}

	public function incrementViews() {
		$quoteId = $this->getId();
		$query = $this->con->prepare("UPDATE quotes SET views=views+1 WHERE id=:id");
		$query->bindParam(":id", $quoteId);
		$query->execute();

		$this->sqlData["views"] = $this->sqlData["views"] + 1;
	}
}
?>