<?php

	require_once __DIR__ . '/HtmlElement.php';
	require_once __DIR__ . '/BaseInput.php';
	require_once __DIR__ . '/Form.php';
	require_once __DIR__ . '/TextInput.php';
	require_once __DIR__ . '/PasswordInput.php';
	require_once __DIR__ . '/Button.php';

	$form = new Form();
	$form->addElement(new TextInput('firstName', '', 'First Name'));
	$form->addElement(new TextInput('email', '', 'Email'));
	$form->addElement(new PasswordInput('password', '', 'Password'));
	$form->addElement(new Button('submit', 'Send'));

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
</head>
<body>

<?php

	$form = $form->render();

	print_r($form);

?>

</body>
</html>