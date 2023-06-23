<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMG-CODING-EXERCISE-PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require 'Form.php';
require 'Inputs/TextInput.php';

$form = new Form();
$form->addInput(new TextInput("firstname", "First Name", "Bruce"));
$form->addInput(new TextInput("lastname", "Last Name", "Wayne"));


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($form->validate()) {
        // display user info
        $firstName = $form->getValue("firstname");
        $lastName = $form->getValue("lastname");
        echo $firstName . " " . $lastName;
    } else {
        $form->display();
    }
} else {
    $form->display();
}
?>    
</body>
</html>
