<!DOCTYPE html>
<html lang="en">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "127.0.0.1";
        $username = "root";
        $password = "qwerty";
        $dbname = "androidchat";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $query = "SELECT * FROM `users` WHERE clientId = '660422b33a69f'";
        
        $sql = @mysqli_query($conn, $query);
        $user = @mysqli_fetch_array($sql);
        echo $user['id'];
    ?>
    <script>
        
        // ws = new WebSocket("ws://localhost:9852");
        // // ws.onopen = function() {
        // //     console.log('connected');
        // //     ws.send(JSON.stringify({
        // //         username: "ea",
        // //         password: "Willkommen2023!"
        // //     }));
        // // };
        // const func = (id) => {
        //     ws.send(JSON.stringify({
        //         user_id: id,
        //         clientID : <?php echo $user['id']; ?>
        //         message: "hello"
        //     }));
        // }
    </script>
    <button onclick="func()">Click me</button>
</body>
</html>