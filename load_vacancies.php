<?php
include 'connect.php';

$vacancies = $conn->query("SELECT * FROM vacancies ORDER BY posted_at DESC");

while ($row = $vacancies->fetch_assoc()): ?>
  <div class="section-2-head">
    <p class="p-1"><?= htmlspecialchars($row['title']) ?></p>
    <div class="section-2-head-1">
      <i class="fa-solid fa-location-dot"></i>
      <p><?= htmlspecialchars($row['location']) ?></p>
    </div>
    <div class="section-2-head-2">
      <div><i class="fa-solid fa-briefcase"></i><p><?= htmlspecialchars($row['type']) ?></p></div>
      <div><i class="fa-regular fa-clock"></i>
        <p>
          <?php
            $days = (new DateTime($row['posted_at']))->diff(new DateTime())->days;
            echo $days === 0 ? "Today" : "$days day(s) ago";
          ?>
        </p>
      </div>
    </div>
    <div class="p-2">
      <p class="p-2"><?= nl2br(htmlspecialchars($row['description'])) ?></p>
    </div>
    <div class="vacancy-buttons">
  <a class="apply-btn" href="#">Apply</a>

  <?php if (isset($_SESSION['email'])): ?>
    <a class="edit-btn" href="edit_vacancy.php?id=<?= $row['id'] ?>">Edit</a>
    <a class="delete-btn" href="delete_vacancy.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this vacancy?')">Delete</a>
  <?php endif; ?>
</div>

  </div>
<?php endwhile; ?>
