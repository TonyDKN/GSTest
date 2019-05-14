<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$db = [
    ['name' => 'sasha','surname' => 'krat', 'email' => 'krat@gmail.com', 'pass' => '123'],
    ['name' => 'petya','surname' => 'knuazev', 'email' => 'knuazev@gmail.com', 'pass' => '234'],
    ['name' => 'dima','surname' => 'timofeev', 'email' => 'timofeev@gmail.com', 'pass' => '345'],
    ['name' => 'anton','surname' => 'dyadkin', 'email' => 'dyadkin@gmail.com', 'pass' => '456'],

      ];

foreach ($db as $user){
    if ($user['email'] == $email) {
        $answer = 'пользователь с таким email уже зарегистрирован';
        $res = true;
        break;
    } else {
        $answer = 'Регистрация прошла успешно!';
        $res = false;
    }

}

if ($res == false) {
    $db[]= ['name' => $name, 'surname' => $surname, 'email' => $email, 'pass' => $pass ];
}
echo $answer;

$file = 'log.txt';
$text .= '\/';
$fOpen = fopen($file,'a');
fwrite($fOpen,  $name.'/ '. $surname.'/ '. $email.'/ '. $answer. '/ '.date("d-m-Y [H:i:s]")."\n");
fclose($fOpen);


