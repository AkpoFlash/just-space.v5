<?php
    $name = "ФИО заказчика: " . $_POST["fio"] . "\n";
    $telephone = "Контактный телефон: " . $_POST["tel"] . "\n";
    $email = "Контактный email: " . $_POST["email"] . "\n";
    $description = "Описание задачи: " . $_POST["description"] . "\n";
    $separator = "------------------------------------------------------------------\n";
    $file = fopen($_SERVER["DOCUMENT_ROOT"] . "/logs/orders.txt", "a+");
    fputs($file, $name);
    fputs($file, $telephone);
    fputs($file, $email);
    fputs($file, $description);

    $upload_dir = $_SERVER["DOCUMENT_ROOT"] . "/logs/uploads/";
    $upload_file = $upload_dir . basename($_FILES['file']['name']);

    if(move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)){
      $is_file = "Прикрепленный файл: " . basename($_FILES['file']['name']) . "\n";
      fputs($file, $is_file);
    }
    else{
      $is_file = "Прикрепленный файл: Отсутствует\n";
      fputs($file, $is_file);
    }

    fputs($file, $separator);
    fclose($file);

    if(mail("info@just-space.ru","Just Space - Заказ", $name . $telephone . $email . $description . $is_file)){
        mail($_POST["email"],"Just Space", "Благодарим вас за оформиление заказа на нашем сайте, по указанному телефону с вами свяжется наш менеджер.");
        echo json_encode("OK");
    }
?>
