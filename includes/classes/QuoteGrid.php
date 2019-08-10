<?php

class QuoteGrid {

	private $con, $amount;

	public function __construct($con, $amount) {
		$this->con = $con;
		$this->amount = $amount;
	}

	public function create($quotes) {
		if ($quotes == null) {
			$gridItems = $this->generateItems();
		}
		else {
			$gridItems = $this->generateItemsFromQuotes($quotes);
		}

		return "<div class='quotes'>
					<div class='pure-g text-center'>
						$gridItems
					</div>
				</div>";
	}

	public function generateItems() {
		$query = $this->con->prepare("SELECT * FROM quotes WHERE status = '1' LIMIT $this->amount");
		$query->execute();

		$quotesHtml = "";
		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$quote = new Quote($this->con, $row["id"]);
			$quotesHtml .= $this->createGridItem($quote);
		}

		return $quotesHtml;
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

	public function generateItemsFromQuotes($quotes) {
		$quotesHtml = "";
		foreach ($quotes as $row) {
			$quote = new Quote($this->con, $row["id"]);
			$quotesHtml .= $this->createGridItem($quote);
		}

		return $quotesHtml;
	}

}

?>