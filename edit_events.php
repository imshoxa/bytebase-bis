<?php
session_start();
include 'connect.php';

// Проверка авторизации
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

// Проверка наличия ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid event ID.");
}

$event_id = intval($_GET['id']);

// Обработка обновления
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $date = $_POST['date'];
    $location = trim($_POST['location']);

    $stmt = $conn->prepare("UPDATE events SET title = ?, description = ?, date = ?, location = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $title, $description, $date, $location, $event_id);
    
    if ($stmt->execute()) {
        header("Location: events.php");
        exit();
    } else {
        echo "Error updating event.";
    }
}

// Получение текущих данных
$stmt = $conn->prepare("SELECT * FROM events WHERE id = ?");
$stmt->bind_param("i", $event_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows !== 1) {
    die("Event not found.");
}

$event = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Event</title>
  <link rel="stylesheet" href="style2.css?v=1">
  <link rel="stylesheet" href="styleevents.css?v=1">
  <link rel="stylesheet" href="styleeventedit.css?v=1">
  <link rel="stylesheet" href="fonts.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
  <header class="header">
    <nav class="nav">
      <div class="container">
        <div class="nav__item">
          <a href="mainpage.php"><img src="img/logobyte-v-3.png" alt="ByteBase Logo"></a>
          <ul class="categories">
            <li><a href="mainpage.php" class="categories_list">Home</a></li>
            <li><a href="events.php" class="categories_list active">Events</a></li>
            <li><a href="news.php" class="categories_list">News</a></li>
            <li><a href="about.php" class="categories_list">About us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="main">
    <section class="section__events-intro">
      <div class="container">
        <h2 class="section-title">Edit Event</h2>
        <form method="post" class="edit-form">
          <input type="text" name="title" value="<?= htmlspecialchars($event['title']) ?>" required>
          <textarea name="description" required><?= htmlspecialchars($event['description']) ?></textarea>
          <input type="date" name="date" value="<?= htmlspecialchars($event['date']) ?>" required>
          <input type="text" name="location" value="<?= htmlspecialchars($event['location']) ?>" required>
          <button type="submit" class="event-button">Save Changes</button>
          <a href="events.php" class="cancel-button">Cancel</a>
        </form>
      </div>
    </section>
  </main>

  <footer class="footer">
    <nav class="footer__nav">
      <div class="container">
        <div class="footer__nav-block">
          <img src="img/logobyte-v-3-removebg-preview.png" alt="">
          <div class="footer__nav-text">
            <p class="footer__nav-text01">Student work for dissertation purposes</p>
            <p class="footer__nav-text02">Salimov Shohruh</p>
          </div>
        </div>
      </div>
    </nav>
  </footer>
</body>
</html>
