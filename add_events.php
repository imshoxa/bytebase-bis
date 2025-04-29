<?php
session_start();
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $location = $_POST['location'];

    $stmt = $conn->prepare("INSERT INTO events (title, description, date, location) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $description, $date, $location);
    $stmt->execute();
    $stmt->close();

    header("Location: events.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add New Event</title>
  <link rel="stylesheet" href="styleaddevent.css">
  
  <!-- <link rel="stylesheet" href="style2.css"> -->
</head>
<body>




<div class="container">
  <div class="addcard">
  <h1>Add New Event</h1>

<form action="add_events.php" method="POST" class="form-box">
  <input type="text" name="title" placeholder="Event Title" required>
  <textarea name="description" placeholder="Event Description" required></textarea>
  <input type="date" name="date" required>
  <input type="text" name="location" placeholder="Location" required>
  <input type="submit" value="Add Event" class="btn">
</form>
</div>
  </div>



</body>
</html>