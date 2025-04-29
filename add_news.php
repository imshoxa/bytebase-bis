<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $created_at = date('Y-m-d H:i:s');

    if (!empty($title) && !empty($content)) {
        $stmt = $conn->prepare("INSERT INTO news (title, content, created_at) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $title, $content, $created_at);
        $stmt->execute();
        $stmt->close();

        header('Location: news.php');
        exit();
    } else {
        $error = "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add News - ByteBase</title>
  <link rel="stylesheet" href="stylenews.css">
  <link rel="stylesheet" href="fonts.css">
  <link rel="stylesheet" href="stylenewsadd.css">
  <link rel="stylesheet" href="stylenewsaddpage.css?v=1">
</head>
<body>

<header class="header">
    <nav class="nav">
        <div class="container">
            <div class="nav__item">
                <a href="mainpage.php"><img src="img/logobyte-v-3.png" alt=""></a>
            <div class="list">
                <ul class="categories">
                    <li><a href="mainpage.php" class="categories_list">Home</a></li>
                    <li><a href="events.php" class="categories_list">Events</a></li>
                    <li><a href="news.php" class="categories_list active">News</a></li>
                    <li><a href="about.php" class="categories_list">About us</a></li>
                </ul>
            </div>
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
    </nav>
</header>


<main class="main-add-news">
  <div class="container">
    <div class="form-box">
      <h1 class="form-title">Add New News</h1>

      <?php if (!empty($error)): ?>
          <p class="error"><?= htmlspecialchars($error) ?></p>
      <?php endif; ?>

      <form method="post">
        <input type="text" name="title" placeholder="News Title" required>

        <textarea name="content" placeholder="Full Content" rows="8" required></textarea>

        <input type="submit" value="Publish News" class="btn">
      </form>

      <div class="back-link">
        <a href="news.php">← Back to News</a>
      </div>
    </div>
  </div>
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
