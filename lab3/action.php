<?PHP 
$Fam = $_POST['Fam']; // собираем введенные данные и записываемв переменные
$Name = $_POST['Name'];
$Otch = $_POST['Otch'];
$birthDate = $_POST['birthDate'];
$sex = $_POST['sex'];
$nation = $_POST['nation'];
$Textarea1 = $_POST['Textarea1'];
$Adres = $_POST['Adres'];
$Check1 = $_POST['Check1'];
$Check2 = $_POST['Check2'];
$Check3 = $_POST['Check3'];
$Check4 = $_POST['Check4'];
$Email = $_POST['Email'];
$Skype = $_POST['Skype'];
$Tel = $_POST['Tel'];
$Radios = $_POST['Radios'];
$photo = $_POST['photo'];
$optionYes = $_POST['optionYes'];
$text = "Фамилия: $Fam \n"; 
$text .= "Имя: $Name \n"; 
$text .= "Отчество: $Otch \n";
$text .= "Дата рождения: $birthDate \n"; 
$text .= "Пол: $sex \n";
$text .= "Национальность: $nation \n"; 
$text .= "Доп.информация: $Textarea1 \n"; 
$text .= "Адрес: $Adres \n"; 
$text .= "Увлекается программированием: $Check1 \n"; 
$text .= "Увлекается спортом: $Check2 \n";
$text .= "Увлекается книгами: $Check3 \n"; 
$text .= "Увлекается путешествиям: $Check4 \n"; 
$text .= "Email: $Email \n";
$text .= "Skype: $Skype \n"; 
$text .= "Телефон: $Tel \n"; 
$text .= "Связываться по: $Radios \n";
$text .= "Получать рассылку: $optionYes \n"; 
$text .= "Фото: $photo \n"; 


    $file = fopen ('./data.txt', 'w+') or die("Ошибка создания/открытия файла."); //открываем для перезаписи файл data.txt лежаший в одной папке с текущей страницей
    fwrite($file, $text); // пишем в файл
    fclose ($file); // закрываем файл
    sleep(1);
    header('Location: http://localhost/lab3 ');

?>

