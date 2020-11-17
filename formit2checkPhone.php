<?php
if(htmlspecialchars($_POST['look_phone']) != '') {
    $phone = htmlspecialchars($_POST['look_phone']);
} else {
    $phone = htmlspecialchars($_POST['phone']);    
}
$phone = preg_replace("/[^\d]+/", "", $phone);
//$modx->log(1, 'Номер телефона - '.$phone);
//$modx->log(1, 'Длина строки - '.strlen($phone));
if(strlen($phone) != 11) {
    $errorMsg = 'Введен неверный номер телефона';
    $validator->addError($key, $errorMsg);
    return false;
} else {
    return true;
}
