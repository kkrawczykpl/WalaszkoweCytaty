<?php 

class QuoteUploadData {

	private $con;
	public $quote, $author, $source, $category;

	public function __construct($con, $quote, $author, $category, $source) {
		$this->con = $con;
		$this->quote = $quote;
		$this->author = $author;
		$this->category = $category;
		$this->source = $source;
	}

	public function upload() {
		if (!$this->insertQuoteData()) {
			echo "Błąd podczas próby zapisania. Spróbuj jeszcze raz.";
			return false;
		}

		return true;
	}

	public function insertQuoteData() {
		$query = $this->con->prepare("INSERT INTO quotes(quote, author, category, source) VALUES(:quote, :author, :category, :source)");

		$query->bindParam(":quote", $this->quote);
		$query->bindParam(":author", $this->author);
		$query->bindParam(":category", $this->category);
		$query->bindParam(":source", $this->source);

		return $query->execute();

	}

}

?>