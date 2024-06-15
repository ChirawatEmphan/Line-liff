<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกเวลาเข้าเรียน</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://static.line-scdn.net/liff/edge/2/sdk.js"></script>
    <script>
        async function initializeLiff() {
            await liff.init({ liffId: "2005625542-yvjnw1LQ" });
            if (liff.isLoggedIn()) {
                const profile = await liff.getProfile();
                document.getElementById('userName').value = profile.displayName;
            } else {
                liff.login();
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            initializeLiff();
        });
    </script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">บันทึกเวลาเข้าเรียน</h1>
        <form action="save_attendance.php" method="post">
            <div class="mb-4">
                <label for="userName" class="block text-gray-700 font-bold mb-2">ชื่อผู้ใช้งานไลน์:</label>
                <input type="text" id="userName" name="userName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
            </div>
            <div class="mb-4">
                <label for="attendanceTime" class="block text-gray-700 font-bold mb-2">เวลาเข้าเรียน:</label>
                <input type="datetime-local" id="attendanceTime" name="attendanceTime" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">บันทึก</button>
            </div>
        </form>
    </div>
</body>
</html>
