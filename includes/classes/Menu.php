<?php

class Menu {

	private $con;

	public function __construct($con) {
		$this->con = $con;
	}

	public function createMenu() {
		$categoriesMenu = $this->createCategoriesMenuHTML();
		$addButton = $this->createAddButton();

		return "$categoriesMenu
				$addButton";
	}

	public function createCategoriesMenuHTML() {
		$query = $this->con->prepare("SELECT * FROM categories");
		$query->execute();
		$html = "";
		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$id = $row['id'];
			$name = $row['name'];
			$html .= "<li class='pure-menu-item'><a href='category.php?id=$id' class='pure-menu-link'>$name</a></li>";
		}

		return $html;
	}

	private function createAddButton() {
		return "<li class='pure-menu-item'><a href='add.php' class='pure-menu-link'>Dodaj</a></li>";
	}
}