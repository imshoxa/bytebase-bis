<?php
session_start();
include 'connect.php';

// Проверка авторизации
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

// Проверка ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid event ID.");
}

$event_id = intval($_GET['id']);

// Удаление события
$stmt = $conn->prepare("DELETE FROM events WHERE id = ?");
$stmt->bind_param("i", $event_id);

if ($stmt->execute()) {
    header("Location: events.php");
    exit();
} else {
    echo "Error deleting event.";
}
?>
