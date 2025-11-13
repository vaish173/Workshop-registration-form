# 🎓 TechTrail 2025 – Workshop Registration System

> A modern, responsive workshop registration platform with real-time form validation and automated confirmation system.

![Status](https://img.shields.io/badge/Status-Active-brightgreen)
![Version](https://img.shields.io/badge/Version-1.0-blue)
![License](https://img.shields.io/badge/License-MIT-green)

---

## 📋 Overview

**TechTrail 2025** is a sleek, full-stack workshop registration system designed for the CSE Department. It provides a seamless user experience with a modern glassmorphism UI, instant form validation, and automated registration ID generation—all powered by a robust PHP backend and MySQL database.

✨ **Key Highlights:**
- 🎨 Modern pastel-glass UI with smooth animations
- ✅ Real-time client-side form validation
- 🔐 Secure server-side processing
- 🆔 Auto-generated unique registration IDs
- 📱 Fully responsive design
- ⚡ Fast & efficient

---

## 🚀 Features

| Feature | Description |
|---------|-------------|
| 🎨 **Modern Design** | Pastel-glass UI with smooth animations |
| 📋 **Smart Form** | Comprehensive registration form with all essential fields |
| ✔️ **Validation** | Real-time JavaScript validation with user-friendly feedback |
| 💾 **Database** | Secure MySQL storage with auto-incrementing IDs |
| 🎫 **Registration ID** | Auto-generated format: `TT2025-001` |
| 📧 **Confirmations** | Beautiful animated success page with registration details |
| 📱 **Responsive** | Works flawlessly on desktop, tablet, and mobile |

---

## 🛠️ Technology Stack

```
Frontend:   HTML5 | CSS3 | JavaScript (ES6) | jQuery
Backend:    PHP 7.4+
Database:   MySQL 5.7+
Server:     Apache (XAMPP)
```

---

## 📂 Project Structure

```
techtrail/
│
├── 📄 index.html          # Main registration form
├── 🔧 submit.php          # Form submission handler & success page
├── ⚙️  script.js           # Form validation & interactive features
├── 🎨 style.css           # Glassmorphism styling & animations
├── 📊 sql.txt             # Database schema
│
└── 📖 README.md           # This file
```

---

## �️ Database Setup

### Step 1: Open phpMyAdmin
Navigate to `http://localhost/phpmyadmin`

### Step 2: Create Database
```sql
CREATE DATABASE techtrail2025;
```

### Step 3: Create Table
```sql
USE techtrail2025;

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
```

---

## ⚙️ How It Works

```
┌─────────────────────────┐
│  User fills form (UI)   │
└────────────┬────────────┘
             │
             ▼
┌─────────────────────────┐
│ JavaScript Validation   │
└────────────┬────────────┘
             │
             ▼
┌─────────────────────────┐
│  Form Submission        │
└────────────┬────────────┘
             │
             ▼
┌─────────────────────────┐
│  submit.php Processes   │
└────────────┬────────────┘
             │
             ▼
┌─────────────────────────┐
│  MySQL Storage          │
└────────────┬────────────┘
             │
             ▼
┌─────────────────────────┐
│  Generate Reg ID        │
└────────────┬────────────┘
             │
             ▼
┌─────────────────────────┐
│  Success Page (Animated)│
└─────────────────────────┘
```

---

## 🚀 Quick Start

### Prerequisites
- XAMPP installed ([Download here](https://www.apachefriends.org/))
- Basic knowledge of HTML, CSS, JavaScript, and PHP

### Installation

1. **Download & Setup**
   ```bash
   # Navigate to XAMPP htdocs
   cd C:\xampp\htdocs\
   
   # Clone or create the techtrail folder
   git clone <repository-url>
   cd techtrail
   ```

2. **Start Services**
   - Open XAMPP Control Panel
   - Start **Apache** and **MySQL**

3. **Create Database**
   - Open phpMyAdmin: `http://localhost/phpmyadmin`
   - Run the SQL queries from the **Database Setup** section

4. **Run Application**
   - Open browser and navigate to: `http://localhost/techtrail`
   - You're all set! 🎉

---

## 📝 Usage

1. Fill in your details:
   - Full Name
   - Email & Phone
   - College & Department
   - Year of Study
   - Workshop Topic & Mode
   - Additional Comments

2. Click **Submit**

3. View your unique **Registration ID** on the success page

4. Check your email for confirmation (if email feature is enabled)

---

## 🎯 Form Fields

| Field | Type | Required | Validation |
|-------|------|----------|-----------|
| Full Name | Text | ✅ | Min 3 characters |
| Email | Email | ✅ | Valid email format |
| Phone | Text | ✅ | 10 digits |
| College | Text | ✅ | Min 3 characters |
| Department | Select | ✅ | Must select |
| Year of Study | Select | ✅ | Must select |
| Workshop Topic | Select | ✅ | Must select |
| Mode | Select | ✅ | Online/Offline |
| Comments | Text | ❌ | Optional |

---

## 🔒 Security Features

✅ Server-side validation  
✅ SQL injection prevention  
✅ XSS protection  
✅ Input sanitization  
✅ Error handling  

---

## 🎨 Design Highlights

- **Glassmorphism**: Modern frosted glass effect
- **Color Palette**: Soft pastels with vibrant accents
- **Animations**: Smooth transitions and hover effects
- **Typography**: Clean, readable fonts
- **Accessibility**: WCAG compliant

---

## 📸 Screenshots

*[Add screenshots here if available]*

---

## 🐛 Troubleshooting

| Issue | Solution |
|-------|----------|
| Cannot connect to database | Check MySQL is running, verify credentials in submit.php |
| Form won't submit | Check browser console for errors, verify PHP is enabled |
| Styling issues | Clear browser cache, try different browser |
| 404 error | Ensure project is in `C:\xampp\htdocs\techtrail\` |

---

## � Support & Contact

- **Created By**: Vaishnavi V – CSE Department (2025)
- **Team**: TechTrail 2025 Workshop Web Development Team
- **Email**: [Add your email]
- **GitHub**: [Add GitHub link]

---

## 📄 License

This project is open source and available under the **MIT License**. Feel free to use, modify, and distribute.

---

## 🙏 Acknowledgments

- XAMPP for providing the development environment
- The CSE Department for the opportunity
- All workshop participants for their feedback

---

<div align="center">

**Made with ❤️ by Vaishnavi**

⭐ If you found this helpful, please consider giving it a star!

</div>