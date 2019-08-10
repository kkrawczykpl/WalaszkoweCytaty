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

	public function getImage() {
		$images = $this->getImages();
		if ($images) {
			return $images[array_rand($images, 1)];
		}else{
			$images = $this->getRandomImage();
			return $images[array_rand($images, 1)];
		}
	}

	public function getImages() {
		$name = trim($this->getAuthor());
		$query = $this->con->prepare("SELECT img FROM author_images WHERE author LIKE :name");
		$query->bindValue(":name", '%'.$name.'%');
		$query->execute();
		$images = $query->fetchAll();
		return $images;
	}

	public function getRandomImage() {
		$query = $this->con->prepare("SELECT img FROM author_images");
		$query->execute();
		$images = $query->fetchAll();
		return $images;
	}
}
?>