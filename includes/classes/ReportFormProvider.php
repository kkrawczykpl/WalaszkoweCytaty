<?php

class ReportFormProvider {
	private $con;

	public function __construct($con) {
		$this->con = $con;
	}

	public function createForm() {
		$urlInput = $this->createURLInput();
		$messageInput = $this->createMessageInput();
		$categoryInput = $this->createCategoryInput();
		$submitButton = $this->createSubmitButton();

		return "<form action='report-success.php' class='pure-form pure-form-aligned' method='POST' >
					<fieldset>
						$categoryInput
						$urlInput
						$messageInput
						$submitButton
					</fieldset>
				</form>";
	}

	private function createURLInput() {
		return "<div class='pure-control-group'>
					<label for='url'>Link do cytatu (jeżeli dotyczy)</label>
					<input id='url' name='url' type='text' placeholder='URL'>
				</div>";
	}

	private function createCategoryInput() {
		$html = "<div class='pure-control-group'>
					<label for='category'>Kategoria</label>
					<select id='category' name='category'>";
						$query = $this->con->prepare("SELECT * FROM report_categories");
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

	private function createMessageInput() {
		return "<div class='pure-control-group'>
					<label for='message'>Wiadomośc</label>
					<textarea id='message' name='message' rows='3' placeholder='Błąd w pisowni cytatu, poprawiona wersja: xyz.' required></textarea>
					<span class='pure-form-message-inline required-star'>*</span>
				</div>";
	}


	private function createSubmitButton() {
		$requiredInfo = $this->createRequiredInfo();
		return "<div class='pure-controls'>
					$requiredInfo
					<button type='submit' name='submitButton' class='pure-button button-warning'>Zgłoś</button>
				</div>";
	}

	private function createRequiredInfo() {
		return "<p><span class='pure-form-message-inline required-star'>*</span> - Pola wymagane</p>";
	}
}
