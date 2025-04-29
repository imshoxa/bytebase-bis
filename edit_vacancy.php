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
    die("Invalid vacancy ID.");
}

$id = intval($_GET['id']);

// Обработка обновления
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['title']);
    $location = trim($_POST['location']);
    $type = trim($_POST['type']);
    $posted_at = $_POST['posted_at'];
    $description = trim($_POST['description']);

    $stmt = $conn->prepare("UPDATE vacancies SET title = ?, location = ?, type = ?, posted_at = ?, description = ? WHERE id = ?");
    $stmt->bind_param("sssssi", $title, $location, $type, $posted_at, $description, $id);
    
    if ($stmt->execute()) {
        header("Location: mainpage.php");
        exit();
    } else {
        echo "Error updating vacancy.";
    }
}

// Получение текущих данных
$stmt = $conn->prepare("SELECT * FROM vacancies WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows !== 1) {
    die("Vacancy not found.");
}

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Vacancy</title>
  <link rel="stylesheet" href="style2.css?v=1">
  <link rel="stylesheet" href="stylemainpage.css?v=1">
  <link rel="stylesheet" href="stylevacancyedit.css?v=1">
  <link rel="stylesheet" href="fonts.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>

<header class="header">
  <nav class="nav">
    <div class="container">
      <div class="nav__item">
        <a href="mainpage.php"><img src="img/logobyte-v-3.png" alt="ByteBase Logo"></a>
        <div class="list">
          <ul class="categories">
            <li><a href="mainpage.php" class="categories_list">Home</a></li>
            <li><a href="events.php" class="categories_list">Events</a></li>
            <li><a href="news.php" class="categories_list">News</a></li>
            <li><a href="about.php" class="categories_list">About us</a></li>
          </ul>
        </div>
        <div class="list_2">
          <ul class="category-2">
            <?php if (!isset($_SESSION['email'])): ?>
              <a href="index.php" class="categories__list-2">Register</a>
              <a href="index.php" class="categories__list-2">Sign In</a>
            <?php else: ?>
              <a href="logout.php" class="categories__list-2">Log Out</a>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>

<main class="main">
  <section class="edit-vacancy-section">
    <div class="container">
      <div class="edit-vacancy-card">
        <h1>Edit Vacancy</h1>
        <form method="POST" class="edit-form">
          <input type="text" name="title" value="<?= htmlspecialchars($row['title']) ?>" placeholder="Job Title" required>
          <input type="text" name="location" value="<?= htmlspecialchars($row['location']) ?>" placeholder="Location" required>
          <input type="text" name="type" value="<?= htmlspecialchars($row['type']) ?>" placeholder="Type (Full-time, etc.)" required>
          <input type="date" name="posted_at" value="<?= htmlspecialchars($row['posted_at']) ?>" required>
          <textarea name="description" placeholder="Description" rows="6" required><?= htmlspecialchars($row['description']) ?></textarea>
          <div class="edit-form-buttons">
            <button type="submit" class="btn save-btn">Save Changes</button>
            <a href="mainpage.php" class="btn cancel-btn">Cancel</a>
            </div>


        </form>
      </div>
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
