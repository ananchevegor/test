<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>


    <style>
    .container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
  height: 80vh;
  padding: 30px;
  background-color: #f0f0f0;
}

.content {
  flex: 1;
  width: 100%;
}

.form-container {
  width: 100%;
  max-width: 400px;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 8px;
}

.form-container input[type="text"] {
  width: calc(100% - 90px);
  padding: 8px;
  margin-right: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.form-container button {
  width: 80px;
  padding: 8px;
  border: none;
  border-radius: 4px;
  background-color: #007bff;
  color: white;
  cursor: pointer;
}



.message {
  padding: 10px;
  margin-bottom: 10px;
  border-radius: 5px;
  max-width: 70%; /* Максимальная ширина сообщения */
}

.message .text {
  padding: 5px 10px;
  border-radius: 5px;
}

.sender .text {
  background-color: #007bff; /* Цвет фона отправленных сообщений */
  color: #fff; /* Цвет текста отправленных сообщений */
  align-self: flex-end; /* Выравнивание сообщений отправителя по правому краю */
}

.receiver .text {
  background-color: #f0f0f0; /* Цвет фона принятых сообщений */
  color: #000; /* Цвет текста принятых сообщений */
  align-self: flex-start; /* Выравнивание сообщений получателя по левому краю */
}
.chatbox {
  width: 100%; /* Устанавливаем ширину на 100% */
  padding: 20px; /* Добавляем отступы внутри блока */
  background-color: #f0f0f0; /* Задаем цвет фона */
  border-radius: 8px; /* Делаем скругленные углы */
}
.sender {
  float: right; /* Размещаем блок сообщения отправителя справа */
  padding: 10px;
  margin-bottom: 10px;
  background-color: #007bff;
  color: #fff;
  border-radius: 5px;
  margin-right: 600px;
}
.receiver {
  float: left; /* Размещаем блок сообщения получателя слева */
  padding: 10px;
  margin-bottom: 10px;
  background-color: #f0f0f0;
  border-radius: 5px;
  margin-left: 600px;
}


</style>
<body>




<?php
$servername = "127.0.0.1";
$username = "root";
$password = "qwerty";
$dbname = "androidchat";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = "SELECT * FROM `users` WHERE id = '7'";

$sql = @mysqli_query($conn, $query);
$user = @mysqli_fetch_array($sql);

// $tables = array();
// $result = $conn->query("SHOW TABLES");
// while ($row = $result->fetch_row()) {
//     $tables[] = $row[0];
// }

// // Открываем файл для записи
// $backup_file = 'backup.sql';
// $file_handler = fopen($backup_file, 'w');

// // Записываем SQL команды для создания структуры таблиц
// foreach ($tables as $table) {
//     $result = $conn->query("SHOW CREATE TABLE $table");
//     $row = $result->fetch_row();
//     fwrite($file_handler, $row[1] . ";\n\n");
// }

// // Записываем SQL команды для вставки данных
// foreach ($tables as $table) {
//     $result = $conn->query("SELECT * FROM $table");
//     while ($row = $result->fetch_assoc()) {
//         $sql = "INSERT INTO $table VALUES (";
//         foreach ($row as $value) {
//             $sql .= "'" . $conn->real_escape_string($value) . "', ";
//         }
//         $sql = rtrim($sql, ', ') . ");\n";
//         fwrite($file_handler, $sql);
//     }
//     fwrite($file_handler, "\n");
// }

// // Закрываем файл
// fclose($file_handler);

// // Проверяем успешность создания резервной копии
// if (file_exists($backup_file)) {
//     echo "Резервная копия успешно создана.";
// } else {
//     echo "Произошла ошибка при создании резервной копии.";
// }

// // Закрываем соединение с базой данных
// $conn->close();

?>

<div class="container">
    &nbsp; <!-- Невидимый пробел -->
    <div class="chatbox">

    <?php
    
    $curl = curl_init();

    // Устанавливаем URL, куда отправляем запрос
    curl_setopt($curl, CURLOPT_URL, 'http://192.168.56.1/test/api/ChatList/chatroom.php');

    // Устанавливаем метод запроса POST
    curl_setopt($curl, CURLOPT_POST, 1);

    // Устанавливаем данные формы для отправки
    $postData = array(
        'user_id' => '3',
        'companion_id' => '7'
    );
    $postString = http_build_query($postData);

    // Устанавливаем данные, которые будут отправлены в теле запроса
    curl_setopt($curl, CURLOPT_POSTFIELDS, $postString);

    // Выполняем запрос и сохраняем результат
    $result = curl_exec($curl);

    // Проверяем наличие ошибок
    if (curl_errno($curl)) {
        echo 'Ошибка: ' . curl_error($curl);
    }

    // Закрываем cURL сессию
    curl_close($curl);

    // Выводим результат запроса
    

    // Выводим содержимое после декодирования
    if (is_array($result)) {
        // Проходимся по каждому элементу массива
        foreach ($data as $item) {
            // Получаем значения из каждого объекта
            $userId = $item['user_id'];
            $message = $item['message'];
            $time = $item['time'];
            
            // Делаем что-то с полученными данными, например, выводим их
            echo "User ID: $userId, Message: $message, Time: $time <br>";
        }
    } else {
        echo "Ошибка декодирования JSON";
    }
    
    
    ?>


        <div class="message sender">
            <span class="text">Сообщение отправителя</span>
        </div>

        <div class="message receiver">
            <span class="text">Сообщение получателя</span>
        </div>

    </div>
    
    <form class="form-container" action="#">
      <input type="text" id="myInput" name="myInput" placeholder="Введите сообщение..."> <!-- Поле ввода текста -->
      <button type="submit" onclick="func(3)">Отправить</button> <!-- Кнопка отправить -->
    </form>

</div>


</body>
</html>
<script>

	ws = new WebSocket("ws://192.168.56.1:2347");
	ws.onopen = function() {
		console.log('connected');
		// ws.send(JSON.stringify({
		// 	username: "ea",
		// 	password: "Willkommen2023!"
		// }));
	};
	
	const func = (id) => {
        var inputElement = document.getElementById('myInput');
        // Получаем значение (текст) из элемента input
        var text = inputElement.value;
		
        const messjs = "its from browser";
		ws.send(JSON.stringify({
			user_id: id,
			client : "<?php echo $user['clientId']; ?>",
			message: text
		}));


        // Преобразование данных в формат JSON
        const formData = new FormData();
        formData.append('user_id', id);
        formData.append('companion_id', "<?php echo $user['id']; ?>");
        formData.append('message', text);

        // Определение параметров запроса
        const url = 'http://192.168.56.1/test/api/ChatList/chatroommessages.php';
        const options = {
            method: 'POST',
            body: formData
        };

        // Выполнение POST-запроса
        fetch(url, options)
        .then(response => {
            if (!response.ok) {
            throw new Error('Network response was not ok');
            }
        })
        .then(data => {
            console.log('Response:', data);
            inputElement.value = '';
            // Обработка ответа
        })
        .catch(error => {
            console.error('Error:', error);
            // Обработка ошибок
        });

        

	}
</script>