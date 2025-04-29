<?php
session_start();
include 'connect.php';

$news = $conn->query("SELECT * FROM news ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ByteBase - News</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="stylenews.css?v=1">
  <link rel="stylesheet" href="fonts.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>

<header class="header">
  <nav class="nav">
    <div class="container">
      <div class="nav__item">
        <a href="mainpage.php"><img src="img/logobyte-v-3.png" alt="Logo"></a>
        <div class="list">
          <ul class="categories">
            <li><a href="mainpage.php" class="categories_list">Home</a></li>
            <li><a href="events.php" class="categories_list">Events</a></li>
            <li><a href="news.php" class="categories_list active">News</a></li>
            <li><a href="about.php" class="categories_list">About Us</a></li>
          </ul>
        </div>
        <div class="list_2">
          <ul class="category-2">
            <?php if (!isset($_SESSION['email'])): ?>
              <li><a href="index.php" class="categories__list-2">Register</a></li>
              <li><a href="index.php" class="categories__list-2">Sign In</a></li>
            <?php else: ?>
              <li><a href="logout.php" class="categories__list-2">Log Out</a></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>

<main class="main">
  <section class="section__intro">
    <div class="container">
      <h1 class="main__intro-news-title">Latest Tech News</h1>
      <p class="main__intro-news-text">Stay informed with the most recent updates in IT and technology industries.</p>

      <div class="news__list">
        <?php while($n = $news->fetch_assoc()): ?>
        <div class="news__item">
          <h2 class="news__title"><?= htmlspecialchars($n['title']) ?></h2>
          <p class="news__date"><i class="fa-regular fa-calendar"></i> <?= date('M d, Y', strtotime($n['created_at'])) ?></p>

          <div class="full-content">
            <?= nl2br(htmlspecialchars($n['content'])) ?>
          </div>

          <div class="news__buttons">
            <?php if (isset($_SESSION['email'])): ?>
              <a href="edit_news.php?id=<?= $n['id'] ?>" class="edit-btn">Edit</a>
              <a href="delete_news.php?id=<?= $n['id'] ?>" class="delete-btn" onclick="return confirm('Are you sure you want to delete this news?')">Delete</a>
            <?php endif; ?>
          </div>
        </div>
        <?php endwhile; ?>
      </div>

      <?php if (isset($_SESSION['email'])): ?>
        <div class="add-news-wrapper">
          <a href="add_news.php" class="add-news-button">+ Add News</a>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>

<footer class="footer">
  <nav class="footer__nav">
    <div class="container">
      <div class="footer__nav-block">
        <img src="img/logobyte-v-3-removebg-preview.png" alt="Footer Logo">
        <div class="footer__nav-text">
          <p class="footer__nav-text01">Student work for dissertation purposes</p>
          <p class="footer__nav-text02">Salimov Shohruh</p>
        </div>
      </div>
    </div>
  </nav>
</footer>

<!-- Скрипт для раскрытия полной новости -->
<script src="scriptnews.js"></script>

</body>
</html>
