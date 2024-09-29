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
        </form>
    </div>
</body>
</html>