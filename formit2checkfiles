<?php
// максимальный размер файла (512 Кбайт)
$maxFilesSize = 1024 * 1024;
$arr_files = array('service_egrn', 'service_certificate', 'service_contract', 'service_bti_actual', 'service_bti_planed', 'ownership_image');

$i = 0;
foreach($arr_files as $file) {
    
    if(isset($_FILES[$file])) {
        $i = $i + $_FILES[$file]['size'];
    }
}
//$modx->log(1, 'размер загружаемых файлов - '.$i);
//$modx->log(1, 'лимит загружаемых файлов - '.$maxFilesSize);
if($i > $maxFilesSize) {
    //$modx->log(1, 'Общий объем файлов превышает допустимый размер');
    // файл имеет размер больше максимального
    $errorMsg = 'Общий объем файлов превышает допустимый размер';
    $validator->addError($key, $errorMsg);
    return false; // возвращаем false
} else {
    return true;
}
