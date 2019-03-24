<?php 
class QuoteDetailsFormProvider {

	private $con;

	public function __construct($con) {
		$this->con = $con;
	}

	public function createForm() {
		$quoteInput = $this->createQuoteInput();
		$authorInput = $this->createAuthorInput();
		$sourceInput = $this->createSourceInput();
		$categoryInput = $this->createCategoryInput();
		$submitButton = $this->createSubmitButton();

		return "<form action='added.php' class='pure-form pure-form-aligned' method='POST' >
					<fieldset>
						$quoteInput
						$authorInput
						$categoryInput
						$sourceInput
						$submitButton
					</fieldset>
				</form>";
	}

	private function createQuoteInput() {
		return "<div class='pure-control-group'>
					<label for='quote'>Cytat</label>
					<textarea id='quote' name='quote' rows='3' placeholder='Jak on trzyma tego diaxa? Krzysiek ty miałeś kiedyś kątówkę w rękach?' required></textarea>
					<span class='pure-form-message-inline required-star'>*</span>
				</div>";
	}

	private function createAuthorInput() {
		return "<div class='pure-control-group'>
					<label for='author'>Autor cytatu (postać)</label>
					<input id='author' name='author' type='text' placeholder='Kapitan Bomba/Wściekły Wąż/Jeden z braci bliźniaków' required>
					<span class='pure-form-message-inline required-star'>*</span>
				</div>";
	}

	private function createCategoryInput() {
		$html = "<div class='pure-control-group'>
					<label for='category'>Kategoria</label>
					<select id='category' name='category'>";
						$query = $this->con->prepare("SELECT * FROM categories");
						$query->execute();

						while($row = $query->fetch(PDO::FETCH_ASSOC)) {
							$id = $row['id'];
							$name = $row['name'];
							$html .= "<option value='$id'>$name</option>";
						}
		$html .=	"</select>
					 <span class='pure-form-message-inline required-star'>*</span>
				</div>";

		return $html;
	}

	private function createSourceInput() {
		return "<div class='pure-control-group'>
					<label for='source'>Źródło cytatu</label>
					<input id='source' name='source' type='text' placeholder='Egzorcysta Odcinek 1 Sezon 1' required>
				</div>";
	}

	private function createSubmitButton() {
		$requiredInfo = $this->createRequiredInfo();
		return "<div class='pure-controls'>
					$requiredInfo
					<button type='submit' class='pure-button pure-button-primary'>Dodaj</button>
				</div>";
	}

	private function createRequiredInfo() {
		return "<p><span class='pure-form-message-inline required-star'>*</span> - Pola wymagane</p>";
	}
}	
?>