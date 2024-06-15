<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ค้นหาการเข้าเรียน</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h1 class="text-2xl font-bold mb-6 text-center">ค้นหาการเข้าเรียนของนักเรียน</h1>
        <form action="search_attendance.php" method="get" class="space-y-4">
            <div>
                <label for="searchName" class="block text-gray-700 font-bold mb-2">ชื่อนักเรียน:</label>
                <input type="text" id="searchName" name="searchName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">ค้นหา</button>
            </div>
        </form>
        <div id="results" class="mt-6">
            <!-- ผลลัพธ์การค้นหาจะแสดงที่นี่ -->
        </div>
    </div>
</body>
</html>
