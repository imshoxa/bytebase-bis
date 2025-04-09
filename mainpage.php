<?php
session_start();
include("connect.php");
// include("register.php");

if (!isset($_SESSION['email'])) {
    header("Location: homepage.php");
    exit();
}

$email = $_SESSION['email'];
$query = mysqli_query($conn, "SELECT firstName, lastName FROM users WHERE email='$email'");
$user = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
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
                        <li><a href="#home" class="categories_list">Home</a></li>
                        <li><a href="#job" class="categories_list">Events</a></li>
                        <li><a href="#recruiters" class="categories_list">News</a></li>
                        <li><a href="#contacts" class="categories_list">About us</a></li>
                    </ul>
                </div>
                <div class="list_2">
                    <ul class="category-2">
                        <li><a href="register.php" class="categories__list-2">Register</a></li>
                        <li><a href="" class="categories__list-2">Login</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="main">
        <section class="section__intro">
            <div class="container">
                <div class="block__first">
                    <div class="intro__block-left01">
                        <h1 class="main__intro-title">Are you looking for your ideal job?</h1>
                        <p class="main__intro-text">ByteBase - Centralized IT Community Platform, a platform that centralizes IT job listings,
                             internships, events, and news, providing professionals and students 
                             with opportunities and resources in one place to foster industry growth.</p>
                        <div class="main__intro-search">
                            
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="text" placeholder="Type to search" >
                        </div>
                    </div>
                    <div class="intro__block-right01">
                        <img src="img/job-v-1-removebg-preview.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="mini__section">
            <div class="container">
                <h1 class="mini__section-title">Distribution by Destination</h1>
                <div class="mini__blocks">
                    <ul class="mini__blocks-1">
                        <li><a href="" class="mini__blocks-2">Design</a></li>
                        <li><a href="" class="mini__blocks-2">Software</a></li>
                        <li><a href="" class="mini__blocks-2">Support</a></li>
                        <li><a href="" class="mini__blocks-2">Internships</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section-2">
            <div class="container">
                <h1 class="section-2-title">Current vacancies on your field</h1>
                <div class="section-2-grid">
                    <div class="section-2-blocks">
                        <div class="section-2-head">
                            <p class="p-1">Backend (Junior)</p>
                            <div class="section-2-head-1">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>Tashkent, Uzbekistan</p>
                            </div>
                            <div class="section-2-head-2">
                                <div>
                                    <i class="fa-solid fa-briefcase"></i>
                                    <p>Full-time</p>
                                </div>
                                <div>
                                    <i class="fa-regular fa-clock"></i>
                                    <p>1 day ago</p>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="p-2">Requirements: write code that runs on the server, 
                                    that receives requests from the clients, 
                                    and contains the logic to send the appropriate data back to the client.</p>
                            </div>
                            <a class="apply-btn" href="">Apply</a>
                        </div>
                        <div class="section-2-head">
                            <p class="p-1">Backend (Junior)</p>
                            <div class="section-2-head-1">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>Tashkent, Uzbekistan</p>
                            </div>
                            <div class="section-2-head-2">
                                <div>
                                    <i class="fa-solid fa-briefcase"></i>
                                    <p>Full-time</p>
                                </div>
                                <div>
                                    <i class="fa-regular fa-clock"></i>
                                    <p>1 day ago</p>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="p-2">Requirements: write code that runs on the server, 
                                    that receives requests from the clients, 
                                    and contains the logic to send the appropriate data back to the client.</p>
                            </div>
                            <a class="apply-btn" href="">Apply</a>
                        </div>
                        <div class="section-2-head">
                            <p class="p-1">Backend (Junior)</p>
                            <div class="section-2-head-1">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>Tashkent, Uzbekistan</p>
                            </div>
                            <div class="section-2-head-2">
                                <div>
                                    <i class="fa-solid fa-briefcase"></i>
                                    <p>Full-time</p>
                                </div>
                                <div>
                                    <i class="fa-regular fa-clock"></i>
                                    <p>1 day ago</p>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="p-2">Requirements: write code that runs on the server, 
                                    that receives requests from the clients, 
                                    and contains the logic to send the appropriate data back to the client.</p>
                            </div>
                            <a class="apply-btn" href="">Apply</a>
                        </div>
                        <div class="section-2-head">
                            <p class="p-1">Backend (Junior)</p>
                            <div class="section-2-head-1">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>Tashkent, Uzbekistan</p>
                            </div>
                            <div class="section-2-head-2">
                                <div>
                                    <i class="fa-solid fa-briefcase"></i>
                                    <p>Full-time</p>
                                </div>
                                <div>
                                    <i class="fa-regular fa-clock"></i>
                                    <p>1 day ago</p>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="p-2">Requirements: write code that runs on the server, 
                                    that receives requests from the clients, 
                                    and contains the logic to send the appropriate data back to the client.</p>
                            </div>
                            <a class="apply-btn" href="">Apply</a>
                        </div>
                        <div class="section-2-head">
                            <p class="p-1">Backend (Junior)</p>
                            <div class="section-2-head-1">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>Tashkent, Uzbekistan</p>
                            </div>
                            <div class="section-2-head-2">
                                <div>
                                    <i class="fa-solid fa-briefcase"></i>
                                    <p>Full-time</p>
                                </div>
                                <div>
                                    <i class="fa-regular fa-clock"></i>
                                    <p>1 day ago</p>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="p-2">Requirements: write code that runs on the server, 
                                    that receives requests from the clients, 
                                    and contains the logic to send the appropriate data back to the client.</p>
                            </div>
                            <a class="apply-btn" href="">Apply</a>
                        </div>
                        <div class="section-2-head">
                            <p class="p-1">Backend (Junior)</p>
                            <div class="section-2-head-1">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>Tashkent, Uzbekistan</p>
                            </div>
                            <div class="section-2-head-2">
                                <div>
                                    <i class="fa-solid fa-briefcase"></i>
                                    <p>Full-time</p>
                                </div>
                                <div>
                                    <i class="fa-regular fa-clock"></i>
                                    <p>1 day ago</p>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="p-2">Requirements: write code that runs on the server, 
                                    that receives requests from the clients, 
                                    and contains the logic to send the appropriate data back to the client.</p>
                            </div>
                            <a class="apply-btn" href="">Apply</a>
                        </div>
                        <div class="section-2-head">
                            <p class="p-1">Backend (Junior)</p>
                            <div class="section-2-head-1">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>Tashkent, Uzbekistan</p>
                            </div>
                            <div class="section-2-head-2">
                                <div>
                                    <i class="fa-solid fa-briefcase"></i>
                                    <p>Full-time</p>
                                </div>
                                <div>
                                    <i class="fa-regular fa-clock"></i>
                                    <p>1 day ago</p>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="p-2">Requirements: write code that runs on the server, 
                                    that receives requests from the clients, 
                                    and contains the logic to send the appropriate data back to the client.</p>
                            </div>
                            <a class="apply-btn" href="">Apply</a>
                        </div>
                        <div class="section-2-head">
                            <p class="p-1">Backend (Junior)</p>
                            <div class="section-2-head-1">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>Tashkent, Uzbekistan</p>
                            </div>
                            <div class="section-2-head-2">
                                <div>
                                    <i class="fa-solid fa-briefcase"></i>
                                    <p>Full-time</p>
                                </div>
                                <div>
                                    <i class="fa-regular fa-clock"></i>
                                    <p>1 day ago</p>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="p-2">Requirements: write code that runs on the server, 
                                    that receives requests from the clients, 
                                    and contains the logic to send the appropriate data back to the client.</p>
                            </div>
                            <a class="apply-btn" href="">Apply</a>
                        </div>
                        <div class="section-2-head">
                            <p class="p-1">Backend (Junior)</p>
                            <div class="section-2-head-1">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>Tashkent, Uzbekistan</p>
                            </div>
                            <div class="section-2-head-2">
                                <div>
                                    <i class="fa-solid fa-briefcase"></i>
                                    <p>Full-time</p>
                                </div>
                                <div>
                                    <i class="fa-regular fa-clock"></i>
                                    <p>1 day ago</p>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="p-2">Requirements: write code that runs on the server, 
                                    that receives requests from the clients, 
                                    and contains the logic to send the appropriate data back to the client.</p>
                            </div>
                            <a class="apply-btn" href="">Apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pre-footer">
            <div class="container">
                <div class="footer__block">
                    <h1 class="footer__title">Contacts</h1>
                    <div class="footer__big-block">
                        <div class="footer__mini-blocks">
                            <p class="footer__text-title">Email</p>
                            <p class="footer__text">info@bytebase.com</p>
                            <p class="footer__text">info@salimovshohruh.com</p>
                        </div>
                        <div class="footer__mini-blocks">
                            <p class="footer__text-title">Phone Number</p>
                            <p class="footer__text">+998 97 200 63 34</p>
                            <p class="footer__text">+998 97 200 63 34</p>
                        </div>
                        <div class="footer__mini-blocks">
                            <p class="footer__text-title">Address</p>
                            <p class="footer__text">+100000, Republic of Uzbekistan, Tashkent, st. Sharof Rashidov, 99</p>
                        </div>
                    </div>
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
    <!-- <script src="script.js"></script> -->
</body>
</html>