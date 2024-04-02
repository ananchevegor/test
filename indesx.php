<!DOCTYPE html>
<html lang="en">
<script src="assets/pspdfkit.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
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
<input type="text" id="myInput">
<button onclick="func(3)">Click me</button>

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