<div class="oredr-modal jsModalContent" id="oredr-modal">
    {'!AjaxForm' | snippet : [
        'form' => 'moesk_form',
        'hooks' => 'email,createNewOrderFromService',
        'emailTpl' => 'email_moesk_form',
        'emailFrom' => $_modx->config.emailsender,
        'emailTo' => 1 | resource : 'ppa_email_form',
        'emailSubject' => 'Заявка со страницы услуги',
        'customValidators' => 'formit2checkPhone,formit2checkfiles,formit2checkfilesMoesk,formit2checkEmail',
        'validate'=>'inn:required,belongs:required,fio:required,phone:required:formit2checkPhone,email:required:formit2checkEmail,agreement:required,check_files_size:formit2checkfiles:formit2checkfilesMoesk,property_any_electro:required',
    	'validationErrorMessage'=>'В форме содержатся ошибки!',
    	'successMessage'=>'Сообщение успешно отправлено!'
    ]}
</div>
