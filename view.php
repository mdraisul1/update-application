<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Crud Project</title>

    <!-- tailwind css cdn  -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold text-center text-green-800">PHP Crud Project</h1>
        
        <!-- view data in php crud project  -->
        <table class="w-full mt-8 text-center border border-gray-300 bg-green-200 text-gray-800 px-4 py-2">
            <a href="index.php"><input type="button" value="Back" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"></a>
            <!-- table header -->
            <thead class="bg-green-600 text-white">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Email</th>
                    <th class="border border-gray-300 px-4 py-2">Phone</th>
                    <th class="border border-gray-300 px-4 py-2">Website</th>
                    <th class="border border-gray-300 px-4 py-2">Action</th>
                </tr>
            </thead>

            <tbody>
                <!--  get data from database -->
                <?php
                    include "connect.php";

                    $sql = "SELECT * FROM demo";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $website = $row['website'];
                        echo 
                        "<tr>
                            <td class='border border-gray-300 px-4 py-2'>$name</td>
                            <td class='border border-gray-300 px-4 py-2'>$email</td>
                            <td class='border border-gray-300 px-4 py-2'>$phone</td>
                            <td class='border border-gray-300 px-4 py-2'>$website</td>

                            <td class='border border-gray-300 px-4 py-2'>
                                <a href='edit.php?id=$id' class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded'>Edit</a>
                                <a href='delete.php?id=$id' class='bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded'>Delete</a>
                            </td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>