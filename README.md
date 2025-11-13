TechTrail 2025 – Workshop Registration System

A simple and modern workshop registration system built using HTML, CSS, JavaScript, PHP, and MySQL (XAMPP).
It allows users to submit their registration details, which are then stored in a MySQL database.
A confirmation page with a unique Registration ID is displayed after successful submission.

🚀 Features

Modern pastel-glass UI design

Responsive and clean registration form

Front-end validation using JavaScript

Backend processing using PHP

Registration details stored in MySQL

Auto-generated Registration ID (format: TT2025-001)

Animated success confirmation page

🛠️ Technologies Used

Frontend: HTML, CSS, JavaScript (jQuery)

Backend: PHP

Database: MySQL (via XAMPP)

Server: Apache

📂 Project Structure
techtrail/
│
├── index.html          # Registration form
├── submit.php          # Handles form submission & shows success page
├── script.js           # Form validation & UI interactions
├── style.css           # Theme styling
│
└── README.md           # Documentation

📌 Database Setup

Open phpMyAdmin

Create a new database:

CREATE DATABASE techtrail2025;


Create the table:

CREATE TABLE registrations (
  id INT AUTO_INCREMENT PRIMARY KEY,
  reg_id VARCHAR(20),
  fullname VARCHAR(100),
  email VARCHAR(100),
  phone VARCHAR(20),
  college VARCHAR(100),
  department VARCHAR(50),
  year_of_study VARCHAR(20),
  topic VARCHAR(50),
  mode VARCHAR(20),
  comments TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

⚙️ How It Works

User fills and submits the form (index.html)

submit.php receives and validates data

Stores data in MySQL

Generates an auto-registration ID

Displays a success card with animation and the assigned ID

▶️ How to Run

Install XAMPP

Start Apache and MySQL

Place project inside:

C:\xampp\htdocs\techtrail\


Open browser:

http://localhost/techtrail

👩‍💻 Created By

Vaishnavi V – CSE Dept (2025)
TechTrail 2025 Workshop Web Development Team