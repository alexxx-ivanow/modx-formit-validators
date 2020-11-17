<?php
if(htmlspecialchars($_POST['look_email']) != '') {
    $email = htmlspecialchars($_POST['look_email']);
} else {
    $email = htmlspecialchars($_POST['email']);    
}
//$email = preg_replace("#(.+)\+.*@(.*)#", '$1@$2', $email);
//$modx->log(1, 'Номер телефона - '.$phone);
//$modx->log(1, 'Длина строки - '.strlen($phone));
if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $errorMsg = 'Введен неверный email';
    $validator->addError($key, $errorMsg);
    return false;
} else {
    return true;
}
