# DIU Admission Web Application

## Overview
This web application allows students to register, login, and view information about Daffodil International University (DIU).  
The design is fully responsive using **Bootstrap 5**, and the registration form stores data in a **MySQL database** (via XAMPP).

## Features
- Responsive **Home Page** with:
  - Bootstrap navigation bar with drop-down menu.
  - Sliding image banner (carousel) with captions.
  - About DIU section.
  - Why Choose DIU? feature cards.
  - Latest News section with uniform card images.
  - Call-to-action section for registration.
- **Registration Page**:
  - Bootstrap form with validation.
  - Upload image along with student details.
  - Submits data to `register.php` to store in XAMPP MySQL database.
- **Login Page**:
  - Login using email and password.
  - PHP authentication with session support.

## How to Run
1. Ensure you have **XAMPP** installed and running.
2. Import the database `diu_admission` and create the `students` table.
3. Place all project files in your XAMPP `htdocs` folder (e.g., `htdocs/diu-admission`).
4. Open your browser and access:
   - `index.html` → Home Page.
   - `registration.html` → Register a new student.
   - `login.html` → Login to the system.
5. Requires internet connection for Bootstrap CDN.

## Notes
- All uploaded images are stored in the `uploads/` folder.
- PHP files (`register.php`, `authenticate.php`, `db_connect.php`) must be executed via a **local server** (e.g., XAMPP) for database interaction.
- No changes were made to the PHP functionality, so registration and login still work with your XAMPP MySQL database.
