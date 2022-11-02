<?php

$host = 'localhost'; // адрес сервера
   $db_name = 'u1560783_default'; // имя базы данных
   $user = 'u1560783_default'; // имя пользователя
   $password = 'jlt7UEvXCr0rI4T0'; // пароль

   // создание подключения к базе   
      $connection = mysqli_connect($host, $user, $password, $db_name);

// if(isset($_REQUEST['go'])) {
   
$query = "INSERT INTO `users` (`id`, `fio`, `name`, `date`, `nomer`, `email`, `rod`, `password`) 
VALUES (NULL, 'rger', 'gerger', 'gregreg', 'regreg', 'reg', 'erg', 'ergerg')";



   // текст SQL запроса, который будет передан базе
      

   // выполняем запрос к базе данных
      $result = mysqli_query($connection, $query);

   // выводим полученные данные
     

   // закрываем соединение с базой
      mysqli_close($connection);
// }
?>
