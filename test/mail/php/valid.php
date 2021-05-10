<?php
    $msgs = [];
	if (isset($_POST['name']) ) {
        if(empty($_POST['name']) && NAMEISREQUIRED) {
            $msgs['name'] = MSGSNAMEERROR;
        } else {
            if (!empty($_POST['name'])) {
                $name = "<b>Имя: </b>" . trim(strip_tags($_POST['name'])) . "<br>";
            }
            
        }
    }

    if (isset($_POST['tel']) ) {
        if(empty($_POST['tel']) && TELISREQUIRED) {
            $msgs['tel'] = MSGSTELERROR;
        } else {
            if (!empty($_POST['tel'])) {
                $tel = "<b>Телефон: </b> " . trim(strip_tags($_POST['tel'])) . "<br>";
            }
        }
    }

    if (isset($_POST['step1']) ) {
        if(empty($_POST['step1']) && STEP1ISREQUIRED) {
            $msgs['step1'] = MSGSSTEP1ERROR;
        } else {
            if (!empty($_POST['step1'])) {
                $step1 = "<b>Стиль: </b> " . trim(strip_tags($_POST['step1'])) . "<br>";
            }
        }
    }

    if (isset($_POST['step2']) ) {
        if(empty($_POST['step2']) && STEP1ISREQUIRED) {
            $msgs['step2'] = MSGSSTEP1ERROR;
        } else {
            if (!empty($_POST['step2'])) {
                $step2 = "<b>Цвет: </b> " . trim(strip_tags($_POST['step2'])) . "<br>";
            }
        }
    }

    if (isset($_POST['step3']) ) {
        if(empty($_POST['step3']) && STEP1ISREQUIRED) {
            $msgs['step3'] = MSGSSTEP1ERROR;
        } else {
            if (!empty($_POST['step3'])) {
                $step3 = "<b>Материал: </b> " . trim(strip_tags($_POST['step3'])) . "<br>";
            }
        }
    }

    if (isset($_POST['step4']) ) {
        if(empty($_POST['step4']) && STEP1ISREQUIRED) {
            $msgs['step4'] = MSGSSTEP1ERROR;
        } else {
            if (!empty($_POST['step4'])) {
                $step4 = "<b>Срок: </b> " . trim(strip_tags($_POST['step4'])) . "<br>";
            }
        }
    }

    if (isset($_POST['step5']) ) {
        if(empty($_POST['step5']) && STEP1ISREQUIRED) {
            $msgs['step5'] = MSGSSTEP1ERROR;
        } else {
            if (!empty($_POST['step5'])) {
                $step5 = "<b>Бюджет: </b> " . trim(strip_tags($_POST['step5'])) . "<br>";
            }
        }
    }

    if (isset($_POST['step6']) ) {
        if(empty($_POST['step6']) && STEP1ISREQUIRED) {
            $msgs['step6'] = MSGSSTEP1ERROR;
        } else {
            if (!empty($_POST['step6'])) {
                $step6 = "<b>Подарок: </b> " . trim(strip_tags($_POST['step6'])) . "<br>";
            }
        }
    }


    foreach ($_FILES["files"]["error"] as $key => $error) {
        if (!$error == UPLOAD_ERR_OK  && FILEISREQUIRED) {
             $msgs['file'] = MSGSFILEERROR;
        }
    }

    
     if((empty($_POST['email']) && empty($_POST['tel'])) && (!EMAILISREQUIRED && !TELISREQUIRED)) {
         $msgs['attantion'] = 'Заполните хотя бы одно контактное поле для связии с вами';
     }

	if ($msgs) {
	    echo json_encode($msgs);
		die;
	} else {
        $msgs['success'] = MSGSSUCCESS;
    }