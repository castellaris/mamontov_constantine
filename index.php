<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "MyDatabase";

// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);

// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Создаем SQL-запрос для создания таблицы
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

// Выполняем SQL-запрос
if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Добавляем несколько строк данных
$insert_data_sql = "INSERT INTO users (username, email, password) VALUES
    ('JohnDoe', 'john@example.com', 'password1'),
    ('JaneDoe', 'jane@example.com', 'password2'),
    ('BobSmith', 'bob@example.com', 'password3')";

if (mysqli_query($conn, $insert_data_sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

// Выполняем выборку данных из таблицы
$select_data_sql = "SELECT * FROM users";
$result = mysqli_query($conn, $select_data_sql);

// Выводим результат выборки
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " - Username: " . $row["username"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

// Закрываем соединение с базой данных
mysqli_close($conn);
?>
