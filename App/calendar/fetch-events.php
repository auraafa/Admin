<?php
// fetch-events.php
// This script connects to MySQL database and fetches calendar events as JSON for FullCalendar

header('Content-Type: application/json');

$host = 'localhost';
$dbname = 'your_database_name'; // Change this to your db name
$username = 'your_db_user';     // Change this to your db user
$password = 'your_db_password'; // Change this to your db password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Database connection error']);
    exit;
}

try {
    $stmt = $pdo->query("SELECT id, title, start_date, end_date FROM events");
    $events = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $events[] = [
            'id' => $row['id'],
            'title' => $row['title'],
            'start' => $row['start_date'],  // format YYYY-MM-DD or ISO8601
            'end' => $row['end_date'] ? $row['end_date'] : null
        ];
    }
    echo json_encode($events);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Query failed']);
}
?>
