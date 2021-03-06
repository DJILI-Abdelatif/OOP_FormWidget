<?php

	abstract class BaseInput extends HtmlElement
	{

		public $name;
		public $label;
		public $value;
	
		public function __construct(string $name, string $value = '', string $label = '') {
			$this->name  = $name;
			$this->label = $label;
			$this->value = $value;
		}

		public function render(): string {
			return sprintf('<div>
				<label>%s</label><br>
				%s
			</div>', $this->label, $this->renderInput());
		}

		abstract public function renderInput(): string;
	}
	

?>