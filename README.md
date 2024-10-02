
# PHP CRUD Project

This project is a simple CRUD (Create, Read, Update, Delete) application built using PHP and MySQL. The frontend is styled using Tailwind CSS.

## Features

- Create new data entries
- View all data in a table
- Edit existing data
- Delete data
- Responsive design using Tailwind CSS
- Notifications for successful and failed actions

## Requirements

- PHP 7.x or higher
- MySQL database
- Web server (e.g., Apache, Nginx, or a local development environment like XAMPP, WAMP, etc.)
- Tailwind CSS (CDN)

## Setup Instructions

### 1. Clone or Download the Project
You can clone the repository from GitHub or download it as a ZIP file.

```bash
[git clone https://github.com/mdraisul1/update-application]
```

### 2. Create the Database

1. Open **phpMyAdmin** or any MySQL client.
2. Create a new database called `demo`:

```sql
CREATE DATABASE demo;
```

3. Use the following table structure for the `demo` table:

```sql
CREATE TABLE demo (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    website VARCHAR(100) NOT NULL
);
```

### 3. Database Connection

In the `connect.php` file, update the database connection details:

```php
<?php
$servername = "localhost";
$username = "root"; // Update with your DB username
$password = ""; // Update with your DB password
$dbname = "demo"; // Database name

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
```

### 4. Run the Project

1. Start your local server (Apache for XAMPP, Nginx, etc.).
2. Place the project files in your server's root directory (e.g., `htdocs` for XAMPP).
3. Open the browser and navigate to `http://localhost/php-crud-project/view.php` to view the data.

### 5. File Structure

```
php-crud-project/
│
├── connect.php             # Database connection
├── view.php                # Displays the data in a table
├── edit.php                # Allows editing of data
├── update.php              # Handles the update logic
├── delete.php              # Deletes data from the database
└── README.md               # Project documentation
```

### 6. Tailwind CSS

Tailwind CSS is used via CDN in this project. It is already included in the `<head>` of each file:

```html
<script src="https://cdn.tailwindcss.com"></script>
```

### 7. Editing and Updating Data

To edit a data entry:

1. Click the **Edit** button in the table on `view.php`.
2. This redirects you to the `edit.php` page, where the data will be pre-populated.
3. Make the necessary changes and click **Update**.

### 8. Custom Success/Error Messages

On successful data update, a notification message appears and fades out, with automatic redirection back to `view.php`. Error messages are also displayed in a similar style.

### 9. Code Snippets

#### Edit Data Logic

```php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM demo WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $website = $row['website'];

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $website = $_POST['website'];

        $sql = "UPDATE demo SET name='$name', email='$email', phone='$phone', website='$website' WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('Data updated successfully');</script>";
            echo "<script>window.location.href = 'view.php';</script>";
        } else {
            echo "Failed: " . mysqli_error($conn);
        }
    }
}
```

---

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
