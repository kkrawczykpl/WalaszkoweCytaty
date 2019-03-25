<?php

class QuoteGrid {

	private $con;

	public function __construct($con) {
		$this->con = $con;
	}

	public function create($quotes) {
		if ($quotes == null) {
			$gridItems = $this->generateItems();
		}
		else {
			$grdItems = $this->generateItemsFromQuotes($quotes);
		}

		return "<div class='quotes'>
					<div class='pure-g text-center'>
						$gridItems
					</div>
				</div>";
	}

	public function generateItems() {
		$query = $this->con->prepare("SELECT * FROM quotes LIMIT 6");
		$query->execute();

		$quotesHtml = "";
		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$quote = new Quote($this->con, $row["id"]);
			$quotesHtml .= $this->createGridItem($quote);
		}

		return $quotesHtml;
	}

	public function generateItemsFromQuotes($quotes) {

	}

	public function createGridItem($quote) {
		$url = "preview.php?id=" . $quote->getId();
		$quoteText = $quote->getQuote();
		$quoteAuthor = $quote->getAuthor();

		return "<a href='$url' class='pure-u-1-3 a-reset'>
					<p class='quote'>$quoteText</p>
					<p class='text-right caption'>- $quoteAuthor</p>
				</a>";
	}

}

?>