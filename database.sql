CREATE DATABASE tourism_db;

USE tourism_db;

CREATE TABLE users(
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100),
 email VARCHAR(100),
 password VARCHAR(255),
 otp VARCHAR(10),
 verified INT DEFAULT 0,
 role ENUM('admin','user') DEFAULT 'user'
);

CREATE TABLE packages(
 id INT AUTO_INCREMENT PRIMARY KEY,
 title VARCHAR(150),
 location VARCHAR(100),
 price INT,
 description TEXT,
 image VARCHAR(255)
);

CREATE TABLE bookings(
 id INT AUTO_INCREMENT PRIMARY KEY,
 user_id INT,
 package_id INT,
 booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 status VARCHAR(50),
 FOREIGN KEY(user_id) REFERENCES users(id),
 FOREIGN KEY(package_id) REFERENCES packages(id)
);