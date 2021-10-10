<?php

	class Form extends HtmlElement
	{	


		protected $elements = [];

		public function __construct(string $action = '', string $method = 'get') {
			$this->action = $action;
			$this->method = $method;
		}

		public function addElement(HtmlElement $element) {
			$this->elements[] = $element;
		}
	
		public function render(): string {
			$content = implode(PHP_EOL, array_map(function($element) {return $element->render();}, $this->elements));
			return sprintf('<form action="%s" method="%s">%s</form>', $this->action, $this->method, $content);
		}

	}


?>