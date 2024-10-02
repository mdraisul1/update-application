<?php 

include "connect.php";

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

        $sql ="UPDATE demo SET name = '$name', email = '$email', phone = '$phone', website = '$website' WHERE id = $id";
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>

    <!-- tailwind css cdn  -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div>
    <h1 class="text-3xl font-bold text-center text-green-800">Edit Data</h1>
    <form action="update.php" method="post" class="bg-gray-200 p-10 flex justify-center gap-4 items-center">
        <div class="w-1/5">
            <label for="name">Your Name</label>
            <input type="text" class="border border-gray-300 rounded-md w-full p-2 my-2" placeholder="Enter Your Name" name="name" id="name" value="<?php echo $row['name']; ?>">
        </div>
        <div class="w-1/5">
            <label for="email">Your Email</label>
            <input type="email" class="border border-gray-300 rounded-md w-full p-2 my-2" placeholder="Enter Your Email" name="email" id="email" value="<?php echo $row['email']; ?>">
        </div>
        <div class="w-1/5">
            <label for="phone">Phone Number</label>
            <input type="text" class="border border-gray-300 rounded-md w-full p-2 my-2" placeholder="Enter Your Phone Number" name="phone" id="phone" value="<?php echo $row['phone']; ?>">
        </div>
        <div class="w-1/5">
            <label for="website">Website</label>
            <select name="website" id="website" class="border border-gray-300 rounded-md w-full p-2 my-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="https://google.com">Google</option>
                <option value="https://facebook.com">Facebook</option>
                <option value="https://twitter.com">Twitter</option>
            </select>
        </div>
        <div class="w-auto m-auto mt-8">
            <input type="submit" value="Update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="submit">
        </div>
    </form>
</div>

</body>
</html>