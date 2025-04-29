
<?php
session_start();
include 'connect.php';

// Получаем все события
$events = $conn->query("SELECT * FROM events ORDER BY date ASC");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css?v=1">
    <link rel="stylesheet" href="styleevents.css?v=1">
    <link rel="stylesheet" href="styleeventedit.css?v=1">
    <link rel="stylesheet" href="fonts.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>ByteBase</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <div class="container">
                <div class="nav__item">
                    <a href=""><img src="img/logobyte-v-3.png" alt=""></a>
                <div class="list">
                    <ul class="categories">
                        <li><a href="mainpage.php" class="categories_list">Home</a></li>
                        <li><a href="events.php" class="categories_list">Events</a></li>
                        <li><a href="news.php" class="categories_list">News</a></li>
                        <li><a href="about.php" class="categories_list">About Us</a></li>
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
    <main class="main">
        <section class="section__events-intro">
            <!-- <div class="container"> -->
            <section class="section__events-intro">
  <div class="container">
    <h2 class="section-title">Upcoming Events</h2>
    <!-- <div class="events-grid">

      <div class="event-card">
        <div class="event-meta">
          <div class="event-icon">
            <i class="fa-solid fa-calendar-days"></i> <span>Apr 25, 2025</span>
          </div>
          <div class="event-icon">
            <i class="fa-solid fa-location-dot"></i> <span>Online</span>
          </div>
          <div class="event-icon">
            <i class="fa-solid fa-clock"></i> <span>17:00 – 19:00</span>
          </div>
        </div>
        <h3 class="event-title">Tech Meetup: Future of AI</h3>
        <p class="event-description">Join leading experts to discuss the latest trends in AI, including LLMs and robotics.</p>
        <a href="#" class="event-button">Register</a>
      </div>

      <div class="event-card">
        <div class="event-meta">
          <div class="event-icon">
            <i class="fa-solid fa-calendar-days"></i> <span>May 3, 2025</span>
          </div>
          <div class="event-icon">
            <i class="fa-solid fa-location-dot"></i> <span>Startup Hub Tashkent</span>
          </div>
          <div class="event-icon">
            <i class="fa-solid fa-clock"></i> <span>14:00 – 18:00</span>
          </div>
        </div>
        <h3 class="event-title">Startup Pitch Day</h3>
        <p class="event-description">Watch emerging startups pitch to investors in this high-energy showcase of innovation.</p>
        <a href="#" class="event-button">Register</a>
      </div>

      <div class="event-card">
        <div class="event-meta">
          <div class="event-icon">
            <i class="fa-solid fa-calendar-days"></i> <span>May 12, 2025</span>
          </div>
          <div class="event-icon">
            <i class="fa-solid fa-location-dot"></i> <span>WIUT Campus</span>
          </div>
          <div class="event-icon">
            <i class="fa-solid fa-clock"></i> <span>10:00 – 16:00</span>
          </div>
        </div>
        <h3 class="event-title">Design Thinking Workshop</h3>
        <p class="event-description">Hands-on design workshop to learn user-centric problem solving techniques.</p>
        <a href="#" class="event-button">Register</a>
      </div>
      <div class="event-card">
  <div class="event-meta">
    <div class="event-icon">
      <i class="fa-solid fa-calendar-days"></i> <span>May 3, 2025</span>
    </div>
    <div class="event-icon">
      <i class="fa-solid fa-location-dot"></i> <span>Startup Hub Tashkent</span>
    </div>
    <div class="event-icon">
      <i class="fa-solid fa-clock"></i> <span>14:00 – 18:00</span>
    </div>
  </div>
  <h3 class="event-title">Startup Pitch Day</h3>
  <p class="event-description">Watch emerging startups pitch to investors in this high-energy showcase of innovation.</p>
  <a href="#" class="event-button">Register</a>
</div>

<div class="event-card">
  <div class="event-meta">
    <div class="event-icon">
      <i class="fa-solid fa-calendar-days"></i> <span>May 12, 2025</span>
    </div>
    <div class="event-icon">
      <i class="fa-solid fa-location-dot"></i> <span>WIUT Campus</span>
    </div>
    <div class="event-icon">
      <i class="fa-solid fa-clock"></i> <span>10:00 – 16:00</span>
    </div>
  </div>
  <h3 class="event-title">Design Thinking Workshop</h3>
  <p class="event-description">Hands-on workshop to learn user-centric design and creative problem solving.</p>
  <a href="#" class="event-button">Register</a>
</div>

<div class="event-card">
  <div class="event-meta">
    <div class="event-icon">
      <i class="fa-solid fa-calendar-days"></i> <span>June 1, 2025</span>
    </div>
    <div class="event-icon">
      <i class="fa-solid fa-location-dot"></i> <span>Zoom</span>
    </div>
    <div class="event-icon">
      <i class="fa-solid fa-clock"></i> <span>15:00 – 17:30</span>
    </div>
  </div>
  <h3 class="event-title">Intro to Web3 and Blockchain</h3>
  <p class="event-description">Learn the fundamentals of decentralized apps and blockchain technology in this free session.</p>
  <a href="#" class="event-button">Register</a>
</div> -->


    <!-- </div>
    <div class="add-event-wrapper">
  <button class="event-button cool-animate" onclick="openModal()">+ Add Event</button>
    </div> -->
   
    <div class="container">

  <div class="events-grid">
    <?php while($event = $events->fetch_assoc()): ?>
    <div class="event-card">
      <div class="event-meta">
        <div class="event-icon">
          <i class="fa-solid fa-calendar-days"></i> 
          <span><?= date('M j, Y', strtotime($event['date'])) ?></span>
        </div>
        <div class="event-icon">
          <i class="fa-solid fa-location-dot"></i> 
          <span><?= htmlspecialchars($event['location']) ?></span>
        </div>
        <div class="event-icon">
          <i class="fa-solid fa-clock"></i> 
          <span>17:00 – 19:00</span> <!-- тут можно вручную или добавить поле времени в БД -->
        </div>
      </div>
      <h3 class="event-title"><?= htmlspecialchars($event['title']) ?></h3>
      <p class="event-description"><?= htmlspecialchars($event['description']) ?></p>
      <div class="event-buttons">
  <a href="#" class="event-button">Register</a>
  <?php if (isset($_SESSION['email'])): ?>
    <a href="edit_events.php?id=<?= $event['id'] ?>" class="event-button edit-button">Edit</a>
    <a href="delete_event.php?id=<?= $event['id'] ?>" class="event-button delete-button" onclick="return confirm('Are you sure you want to delete this event?')">Delete</a>
  <?php endif; ?>
</div>

    </div>
    <?php endwhile; ?>
  </div>

  <?php if (isset($_SESSION['email'])): ?>
  <div class="add-event-wrapper">
    <a href="add_events.php" class="event-button">+ Add Event</a>
  </div>
  <?php endif; ?>
  <div id="eventModal" class="modal-overlay">
  <div class="modal-content">
    <h2 class="section-title">Add New Event</h2>
    <form method="post" action="add_event.php">
      <input type="text" name="title" placeholder="Title" required>
      <textarea name="description" placeholder="Description" required></textarea>
      <input type="date" name="date" required>
      <input type="text" name="location" placeholder="Location" required>
      <button type="submit" class="event-button">Add</button>
      <button type="button" onclick="closeModal()" class="cancel-button">Cancel</button>
    </form>
  </div>
</div>
</div>
</section>

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
    <!-- <script src="script.js"></script> -->
     <script src="scriptevents.js"></script>

</body>
</html>