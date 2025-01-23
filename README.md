# Student Management System

This project is a Student Management System built using PHP and MySQL. It allows the management of student records and provides functionalities for both admin and students. The system is designed to manage login, add/update/delete student records, and display student results.

## Table of Contents
- [Project Overview](#project-overview)
- [File Structure](#file-structure)
- [Setup Instructions](#setup-instructions)
- [Features](#features)
- [Technologies Used](#technologies-used)

## Project Overview
The Student Management System enables admins to:
- Login to an admin dashboard
- View, insert, update, and delete student records
- Create a new admin user

Students can view their results through the provided `result.php` page.

## File Structure
- **admin.php**: This file establishes the connection between PHP and MySQL.
  
### Admin Table Files:
- **admin1.php**: Admin login page for authentication.
- **adminhome.php**: Admin homepage for performing operations such as inserting, updating, and deleting student records.
- **style.css**: Contains the CSS styles for `adminhome.php`.
- **sign.php**: Allows the creation of a new admin user.
- **insert.php**: Allows the admin to insert records into the "students" table.
- **update.php**: Allows the admin to update student records.
- **delete.php**: Allows the admin to delete student records.

### Students Table Files:
- **result.php**: Displays the results of the students.

## Setup Instructions
1. Ensure you have PHP, MySQL, and a web server (like Apache) installed.
2. Create a MySQL database and tables for `admin` and `students` as described.
3. Edit the connection details in `admin.php` to match your MySQL setup.
4. Upload the PHP files to your web server.
5. Access `admin1.php` to log in as an admin and manage student records.

## Features
- Admin login and session management
- CRUD (Create, Read, Update, Delete) operations for managing student records
- Student results display page
- Admin creation page

## Technologies Used
- PHP
- MySQL
- HTML, CSS
- JavaScript

