# task5

# 🌍 Tourism Management System

A **Full Stack Web Application** developed as part of **Task-5 – Capstone Project** for the **ApexPlanet Internship Program**.

The system allows users to explore tourism packages, search destinations, and book trips online.
An **Admin Panel** allows administrators to manage packages, monitor bookings, and view system analytics.

This project demonstrates **real-world full stack development** using **PHP, MySQL, JavaScript, and AJAX**.

---

# 📌 Project Overview

The **Tourism Management System** is designed to simplify travel planning by providing an online platform where users can browse available tour packages and book them easily.

The application includes:

* User Authentication with OTP Verification
* Tour Package Management
* Booking System
* Search & Filter functionality
* Admin Dashboard
* Analytics using Chart.js

---

# 🚀 Features

## 👤 User Features

* User Registration
* OTP Verification
* Secure Login System
* Browse Tour Packages
* Search Packages by Location
* Book Tour Packages
* View Booking History
* Logout Functionality

---

## 👑 Admin Features

* Admin Dashboard
* Add Tour Packages
* Edit Package Details
* Delete Packages
* View All Bookings
* View System Statistics
* Analytics Dashboard

---

# 🛠️ Technologies Used

### Frontend

* HTML
* CSS
* JavaScript
* AJAX

### Backend

* PHP

### Database

* MySQL

### Libraries

* Chart.js

### Tools

* XAMPP
* Visual Studio Code
* phpMyAdmin
* Git & GitHub

---

# 🗄️ Database Structure

## Users Table

| Column   | Description                 |
| -------- | --------------------------- |
| id       | User ID                     |
| name     | User Name                   |
| email    | Email Address               |
| password | Encrypted Password          |
| otp      | OTP for verification        |
| verified | Account verification status |
| role     | Admin/User role             |

---

## Packages Table

| Column      | Description     |
| ----------- | --------------- |
| id          | Package ID      |
| title       | Package Name    |
| location    | Travel Location |
| price       | Package Price   |
| description | Package Details |

---

## Bookings Table

| Column       | Description         |
| ------------ | ------------------- |
| id           | Booking ID          |
| user_id      | User making booking |
| package_id   | Selected package    |
| booking_date | Booking timestamp   |
| status       | Booking status      |

---

# 📂 Project Structure

```id="tkh4qf"
task5-project
│
├── db.php
├── register.php
├── verify.php
├── login.php
├── logout.php
│
├── index.php
├── packages.php
├── search.php
├── book.php
├── mybookings.php
│
├── admin
│   ├── dashboard.php
│   ├── add_package.php
│   ├── edit_package.php
│   ├── delete_package.php
│   └── bookings.php
│
├── assets
│   ├── css
│   └── js
│
├── images
├── database.sql
└── README.md
```

---

# ⚙️ Installation & Setup

### 1️⃣ Install XAMPP

Download and install XAMPP.

### 2️⃣ Start Server

Start:

* Apache
* MySQL

### 3️⃣ Move Project

Place the project folder inside:

```id="rsgk10"
C:\xampp\htdocs\
```

### 4️⃣ Create Database

Open:

```id="l54bne"
http://localhost/phpmyadmin
```

Create database:

```id="u8bhda"
tourism_db
```

Import:

```id="g1zzje"
database.sql
```

### 5️⃣ Run Project

Open browser:

```id="pnv5sl"
http://localhost/task5-project/register.php
```

---

# 📊 Application Workflow

```id="8hy1ke"
User Registration
        ↓
OTP Verification
        ↓
User Login
        ↓
Browse Tour Packages
        ↓
Search Packages
        ↓
Book Package
        ↓
View Booking History
        ↓
Admin Dashboard
        ↓
Manage Packages & Bookings
```

---

# 📈 Analytics Dashboard

The Admin Dashboard displays statistics including:

* Total Users
* Total Packages
* Total Bookings

Data visualization is implemented using **Chart.js**.

---

# 🎥 Demo

The demo video demonstrates:

* User Registration
* OTP Verification
* Login System
* Package Browsing
* Booking Process
* Admin Dashboard
* Package Management
* Analytics

---

# 📚 Learning Outcomes

Through this project, the following skills were practiced:

* Full Stack Web Development
* PHP & MySQL Integration
* CRUD Operations
* Session Management
* AJAX Implementation
* Admin Panel Development
* Data Visualization

---

# 👩‍💻 Author

**Lakshmi Susmitha Thota**
B.Tech – Information Technology

Developed as part of the **ApexPlanet Virtual Internship Program**.

---
