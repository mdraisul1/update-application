


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Project</title>

    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-1/2 m-auto">
        <h1 class="text-3xl font-bold text-center text-green-800">Crud Project</h1>
        <form action="#" method="post" class="bg-gray-200 p-10">
            <div class="flex justify-center gap-4">
                <div class="w-1/2 m-auto">
                    <label for="name">Your Name</label>
                    <input type="text" class="border border-gray-300 rounded-md w-full p-2 my-2" placeholder="Enter Your Name" name="name" id="name" required>
                </div>
                <div class="w-1/2 m-auto">
                    <label for="email">Your Email</label>
                    <input type="email" class="border border-gray-300 rounded-md w-full p-2 my-2" placeholder="Enter Your Email" name="email" id="email" required>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div class="w-1/2 m-auto">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="border border-gray-300 rounded-md w-full p-2 my-2" placeholder="Enter Your Phone Number" name="phone" id="phone" required>
                </div>
                <div class="w-1/2 m-auto">
                    <label for="website" class="block text-sm font-medium text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500">Website</label>
                    <select name="website" id="website" class="border border-gray-300 rounded-md w-full p-2 my-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="google">Google</option>
                        <option value="facebook">Facebook</option>
                        <option value="twitter">Twitter</option>
                    </select>
                </div>
            </div>
            
            <!-- submit button  -->
            <div class="flex justify-center gap-4 mt-4">
                <input type="submit" value="Submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="submit">
            </div>
        </form>
    </div>
</body>
</html>