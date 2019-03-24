<?php 
class QuoteDetailsFormProvider {

	public function createForm() {
		$quoteInput = $this->createQuoteInput();
		$authorInput = $this->createAuthorInput();
		$sourceInput = $this->createSourceInput();
		$categoryInput = $this->createCategoryInput();

		return "<form action='added.php' class='pure-form pure-form-aligned' method='POST' >
					<fieldset>
						$quoteInput
						$authorInput
						$categoryInput
						$sourceInput
					</fieldset>
				</form>";
	}

	private function createQuoteInput() {
		return "<div class='pure-control-group'>
					<label for='quote'>Cytat</label>
					<textarea id='quote' name='quote' rows='3' placeholder='Jak on trzyma tego diaxa? Krzysiek ty miałeś kiedyś kątówkę w rękach?' required></textarea>
					<span class='pure-form-message-inline'>*</span>
				</div>";
	}

	private function createAuthorInput() {
		return "<div class='pure-control-group'>
					<label for='author'>Autor cytatu (postać)</label>
					<input id='author' name='author' type='text' placeholder='Kapitan Bomba/Wściekły Wąż/Jeden z braci bliźniaków' required>
					<span class='pure-form-message-inline'>*</span>
				</div>";
	}

	private function createCategoryInput() {
		return "<div class='pure-control-group'>
					<label for='category'>Kategoria</label>
					<select id='category' name='category'>
						<option>AL</option>
						<option>CA</option>
						<option>IL</option>
					</select>
					<span class='pure-form-message-inline'>*</span>
				</div>";
	}
	
	private function createSourceInput() {
		return "<div class='pure-control-group'>
					<label for='source'>Źródło cytatu</label>
					<input id='source' name='source' type='text' placeholder='Egzorcysta Odcinek 1 Sezon 1' required>
				</div>";
	}
}	
?>