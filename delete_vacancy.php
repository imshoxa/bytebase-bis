<?php
session_start();
include 'connect.php';

// Проверка ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "Invalid vacancy ID.";
    exit;
}

$id = intval($_GET['id']);

// Удаление
$stmt = $conn->prepare("DELETE FROM vacancies WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: mainpage.php");
    exit;
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
