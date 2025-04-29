# ByteBase

[![Made with PHP](https://img.shields.io/badge/PHP-8%2B-blue)](https://www.php.net/)
[![Database](https://img.shields.io/badge/Database-MySQL-informational)](https://www.mysql.com/)
[![Server](https://img.shields.io/badge/Server-XAMPP-orange)](https://www.apachefriends.org/index.html)
[![Platform](https://img.shields.io/badge/Platform-macOS-lightgrey)](https://www.apple.com/macos/)
[![Deployment](https://img.shields.io/badge/Deployed%20with-Herd-green)](https://herd.laravel.com/)

---

ByteBase is a centralized platform for organizing and publishing events, IT-related news, and job/internship opportunities.  
The project was created to serve as a community hub for students, developers, and IT professionals.

---

## 🌐 Project Overview

- **Purpose:** Aggregate events, announcements, and job opportunities into one convenient platform.
- **Key Features:**  
  - Event listing and management  
  - News updates  
  - Job and internship postings  
  - Admin functionalities (add/edit/delete)

---

## ⚙️ Technology Stack

- **Frontend:** HTML5, CSS3, JavaScript
- **Backend:** PHP 8+
- **Database:** MySQL
- **Server Environment:** Apache (via XAMPP)
- **Deployment Tools:**  
  - **Local Development:** XAMPP (Apache + MySQL)  
  - **PHP Runtime Manager:** Herd (for macOS)

---

### Set Up Environment

1. Install [XAMPP](https://www.apachefriends.org/index.html) for macOS.
2. Install [Herd](https://herd.laravel.com/) to manage PHP versions easily.
3. Create a new database in MySQL (e.g., `bytebase_db`).
4. Import the provided `.sql` file (if available) to set up database tables.

### Configure the Project

1. Move the project folder to the `htdocs` directory (inside your XAMPP installation).
2. Update database credentials in `config.php` or `.env` (if used).

### Start the Server

1. Launch **Apache** and **MySQL** services using the XAMPP Control Panel.
2. Open your browser and navigate to: http://localhost/bytebase-bis/
3. Enjoy the platform! 🎉

---

## 📁 Project Structure
/bytebase-bis /img → Images and icons /css → Stylesheets /php → PHP scripts /js → JavaScript files /database → SQL files (if available) index.php → Main entry point README.md → Project documentation ...


---

## 📌 Notes

- Developed and tested on **MacBook** with **macOS**.
- **XAMPP** used for the local environment.
- **Herd** used for smooth PHP version switching on Mac.
- Compatible with other platforms with minor adjustments.

---

## 📜 License

This project is open for educational and community purposes.  
Feel free to contribute, suggest improvements, or fork it.

---



