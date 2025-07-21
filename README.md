# Task-2-Smart-Methods
# Simple Task System Project

## Overview

This project is a simple web application built with PHP and MySQL for managing a basic task list.  
Users can submit their name and age via a form, and the data is stored in a MySQL database.  
All records are displayed in a table below the form, with a toggle button for each record to switch the status between 0 and 1 instantly.

---

## Technologies Used

- PHP (backend)
- MySQL (database)
- HTML / CSS (frontend)
- JavaScript (for instant status update using Fetch API)
- XAMPP (local server to run the project)

---

## Setup and Run Locally

### Requirements

- XAMPP or any local server supporting PHP and MySQL
- Modern web browser (Chrome, Firefox, Edge, etc.)

### Steps

1. **Start XAMPP**  
   Run Apache and MySQL services from the XAMPP control panel.

2. **Create Database**  
   - Open your browser and go to `http://localhost/phpmyadmin`  
   - Create a new database named `task2`  
   - Inside the database, run this SQL query to create the `users` table:

    ```sql
    CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100),
        age INT,
        status TINYINT(1) DEFAULT 0
    );
    ```

3. **Add Project Files**  
   - Copy your project folder (e.g., `smart_task2`) into XAMPP’s `htdocs` directory (usually `C:\xampp\htdocs\`)  
   - Ensure these files are inside the folder: `index.php`, `db.php`, `insert.php`, `toggle.php`, and `style.css`.

4. **Configure Database Connection (Optional)**  
   - Open `db.php` and verify the database connection settings match your setup:

    ```php
    $conn = new mysqli("localhost", "root", "", "task2");
    ```

5. **Run the Project**  
   - Open your browser and visit: `http://localhost/smart_task2/`  
   - You should see the input form and below it the table with records and toggle buttons.

---

## Key Files Explanation

- **index.php**:  
  Main page showing the input form and the records table with toggle buttons.

- **db.php**:  
  Handles database connection.

- **insert.php**:  
  Processes the submitted form data and inserts it into the database.

- **toggle.php**:  
  Handles AJAX requests to toggle the status field in the database instantly.

- **style.css**:  
  Contains styling for the webpage.

---

## Features

- Add new user data (name and age) into the database.
- Display all records in a table format.
- Toggle the `status` field between 0 and 1 for each record via a button.
- Instant status update on the page without reload using JavaScript Fetch API.

---

## Notes

- This project is intended for learning and local use.  
- Not recommended for production without proper security enhancements.  
- Possible extensions: add record deletion, editing, validation, and user authentication.

---

## License

This project is open source and licensed under the MIT License.

---

## Author

[WALEED ALHARBI]

---

Thank you for checking out this project!  
Feel free to open an issue or contact me for any questions or suggestions.
