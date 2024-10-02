<?php
include "connect.php"; // Database connection

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Fetch data from the database
    $sql = "SELECT * FROM demo WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // Store data in variables
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $website = $row['website'];
}

// Update logic
if (isset($_POST['submit'])) {
    $id = $_POST['id']; // Get ID from hidden input field
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];

    // Update query
    $sql = "UPDATE demo SET name = '$name', email = '$email', phone = '$phone', website = '$website' WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    // Redirect or show a success message
    if ($result) {
        echo "
        <div id='success-alert' class='fixed top-5 right-5 bg-green-500 text-white px-6 py-3 rounded shadow-lg'>
            Data updated successfully!
        </div>
        <script>
            // Fade out success message after 3 seconds
            setTimeout(function() {
                document.getElementById('success-alert').style.opacity = '0';
            }, 3000);
            
            // Redirect after 3 seconds
            setTimeout(function() {
                window.location.href = 'view.php';
            }, 3000);
        </script>
        ";
    } else {
        echo "
        <div id='error-alert' class='fixed top-5 right-5 bg-red-500 text-white px-6 py-3 rounded shadow-lg'>
            Failed: " . mysqli_error($conn) . "
        </div>
        <script>
            // Fade out error message after 5 seconds
            setTimeout(function() {
                document.getElementById('error-alert').style.opacity = '0';
            }, 5000);
        </script>
        ";
    }
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div>
    <h1 class="text-3xl font-bold text-center text-green-800">Edit Data</h1>
    
    <!-- Form for editing data -->
    <form action="" method="post" class="bg-gray-200 p-10 flex justify-center gap-4 items-center">
        <!-- Hidden input field to store the ID -->
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        
        <div class="w-1/5">
            <label for="name">Your Name</label>
            <input type="text" class="border border-gray-300 rounded-md w-full p-2 my-2" placeholder="Enter Your Name" name="name" id="name" value="<?php echo $name; ?>">
        </div>
        
        <div class="w-1/5">
            <label for="email">Your Email</label>
            <input type="email" class="border border-gray-300 rounded-md w-full p-2 my-2" placeholder="Enter Your Email" name="email" id="email" value="<?php echo $email; ?>">
        </div>
        
        <div class="w-1/5">
            <label for="phone">Phone Number</label>
            <input type="text" class="border border-gray-300 rounded-md w-full p-2 my-2" placeholder="Enter Your Phone Number" name="phone" id="phone" value="<?php echo $phone; ?>">
        </div>
        
        <div class="w-1/5">
            <label for="website">Website</label>
            <select name="website" id="website" class="border border-gray-300 rounded-md w-full p-2 my-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="google" <?php if ($website == 'google') echo 'selected'; ?>>Google</option>
                <option value="facebook" <?php if ($website == 'facebook') echo 'selected'; ?>>Facebook</option>
                <option value="twitter" <?php if ($website == 'twitter') echo 'selected'; ?>>Twitter</option>
            </select>
        </div>
        
        <div class="w-auto m-auto mt-8">
            <input type="submit" value="Update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="submit">
        </div>
    </form>
</div>

</body>
</html>
