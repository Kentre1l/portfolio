The project is a **Personal Portfolio Website** designed to showcase the professional profile of Tyrone, including their skills, completed projects, and a way to connect via a contact form. The website will feature a modern, responsive design tailored for desktop users, with interactive elements such as a project carousel and smooth navigation. The backend, built using PHP and MySQL, will handle contact form submissions, validate user inputs, and securely store visitor details in a database for future use. This portfolio serves as a digital resume to highlight Tyrone's expertise and achievements while offering potential collaborators or employers an easy way to get in touch.


HOW TO RUN;

---

### **1. Set Up Your Local Development Environment**
You need the following installed:
1. **A Local Server Environment**:
   - Use tools like [XAMPP](https://www.apachefriends.org/index.html), [MAMP](https://www.mamp.info/), or [WAMP](https://www.wampserver.com/).
   - These provide Apache (web server), PHP (backend), and MySQL (database).

2. **A Code Editor**:
   - Examples: [Visual Studio Code](https://code.visualstudio.com/), Sublime Text, or Atom.

---

### **2. Prepare the Project Files**
1. Place all your project files (HTML, CSS, JavaScript, PHP, etc.) into the **`htdocs`** folder in XAMPP (or the equivalent for MAMP/WAMP).
   - Example directory:
     ```
     C:\xampp\htdocs\portfolio_project\
     ```

2. Ensure the following structure:
   ```
   portfolio_project/
   ├── index.html         (Frontend file)
   ├── styles.css         (CSS file)
   ├── script.js          (JavaScript file)
   ├── handle_contact.php (Backend file)
   ├── db_config.php      (Database connection file)
   ├── sample_images/     (Folder for project images, if any)
   ```

---

### **3. Create the Database**
1. **Start XAMPP**:
   - Open XAMPP and start the **Apache** and **MySQL** services.

2. **Create the Database**:
   - Open your browser and go to `http://localhost/phpmyadmin`.
   - Click on the **Databases** tab.
   - Create a new database named `portfolio`.

3. **Import the Table**:
   - Switch to the `portfolio` database.
   - Go to the **SQL** tab and paste the following query to create the `contact_form` table:
     ```sql
     CREATE TABLE contact_form (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(100) NOT NULL,
         email VARCHAR(100) NOT NULL,
         phone VARCHAR(15),
         submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```

---

### **4. Update Database Configuration**
1. Open the `db_config.php` file.
2. Ensure the database credentials match your local setup:
   ```php
   <?php
   $host = "localhost";
   $db_name = "portfolio";
   $username = "root";  // Default XAMPP username
   $password = "";      // Default XAMPP password (empty string)
   $conn = new mysqli($host, $username, $password, $db_name);
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   ?>
   ```

---

### **5. Access the Project**
1. Open your browser.
2. Enter the URL for your project:
   ```
   http://localhost/portfolio_project/index.html
   ```

---

### **6. Test the Form Submission**
1. Go to the **Contact** section of your portfolio.
2. Fill in the form and submit.
3. After submission:
   - Check the database table (`contact_form`) in phpMyAdmin to ensure the data is stored.
   - A success or error message should appear on the website.

---

