<?php


	class Button extends HtmlElement
	{
		public $text;
		public $type;

		public function __construct(string $type, string $text) {
			$this->text = $text;
			$this->type = $type;
		}

		public function render(): string {
			return sprintf('<button type="%s">%s</button>', $this->type, $this->text);
		}

	}



?>