<?php 

class ReportUploadData {

	private $con;
	public $quote, $author, $source, $category;

	public function __construct($con, $url, $category, $message) {
		$this->con = $con;
		$this->url = $url;
		$this->category = $category;
		$this->message = $message;
	}

	public function upload() {
		if (!$this->insertReportData()) {
			echo "Błąd podczas próby zapisania. Spróbuj jeszcze raz.";
			return false;
		}

		return true;
	}

	public function insertReportData() {
		$query = $this->con->prepare("INSERT INTO reports(url, category, message) VALUES(:url, :category, :message)");

		$query->bindParam(":url", $this->url);
		$query->bindParam(":category", $this->category);
		$query->bindParam(":message", $this->message);

		return $query->execute();

	}

}

?>