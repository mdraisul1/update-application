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
        <table class="w-full mt-8 text-center border border-gray-300 bg-gray-200 text-gray-800 rounded-md px-4 py-2">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Email</th>
                    <th class="border border-gray-300 px-4 py-2">Phone</th>
                    <th class="border border-gray-300 px-4 py-2">Website</th>
                </tr>
            </thead>

            <tbody>
                <!--  get data from database -->
                <?php
                    include "connect.php";

                    $sql = "SELECT * FROM demo";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
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
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>