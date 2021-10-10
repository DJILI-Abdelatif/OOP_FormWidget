<?php


	abstract class HtmlElement 
	{

		public $action;
		public $method;

		abstract public function render(): string;
	}




?>