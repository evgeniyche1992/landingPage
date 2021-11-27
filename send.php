<?php


if(isset($_POST['phone'])) //выполняется условие для того,чтобы исключить ошибки,что не отправлены все данные от клиента
$inputPhone = $_POST['phone'];
    if(isset($_POST['name'])) //выполняется условие для того,чтобы исключить ошибки,что не отправлены все данные от клиента
$inputName = $_POST['name'];
    if(isset($_POST['mail'])) //выполняется условие для того,чтобы исключить ошибки,что не отправлены все данные от клиента
$inputMail = $_POST['mail'];

$inputPhone = htmlspecialchars($inputPhone);
$inputName = htmlspecialchars($inputName);
$inputMail = htmlspecialchars($inputMail);

$inputPhone = urldecode($inputPhone);
$inputName = urldecode($inputName);
$inputMail = urldecode($inputMail);

$inputPhone = trim($inputPhone);
$inputName = trim($inputName);
$inputMail = trim($inputMail);
/*mail("$inputMail", "Заявка с сайта", "Здравствуйте Уважаемый $inputName, рады видеть Вас");*/ //для отправки на почту


?>