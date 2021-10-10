<?php


	class PasswordInput extends BaseInput 
	{

		// public function render(): string {
		// 	return sprintf('<div>
		// 		<label>%s</label><br>
		// 		<input type="password" name="%s" value="%s" />
		// 	</div>', $this->label, $this->name, $this->value);
		// }

		public function renderInput(): string {
			return sprintf('<input type="password" name="%s" value="%s" />', $this->name, $this->value);
		}

	}



?>