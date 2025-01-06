<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Resume Builder</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            transition: background-color 0.3s, color 0.3s;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            margin: 20px;
			margin-top: 40%;
        }
        .navbar {
            width: 100%;
            background-color: #333;
            overflow: hidden;
            position: fixed;
            top: 0;
            left: 0;
        }
        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .toggle-btn {
            float: right;
            display: block;
            padding: 14px 16px;
            cursor: pointer;
        }
        .toggle-btn .fa {
            font-size: 18px;
        }
        .dark-mode .toggle-btn .fa-moon {
            display: none;
        }
        .dark-mode .toggle-btn .fa-sun {
            display: inline;
        }
        .toggle-btn .fa-sun {
            display: none;
        }
        h2 {
            margin-bottom: 20px;
            color: #333333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], textarea, input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="file"] {
            padding: 5px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .dark-mode {
            background-color: #333;
            color: #f4f4f9;
        }
        .dark-mode .container {
            background-color: #555;
            color: #f4f4f9;
        }
        .dark-mode .navbar {
            background-color: #222;
        }
		.dark-mode label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
			color:rgb(9, 8, 8);
        }
        .dark-mode .navbar a {
            color: #f4f4f9;
        }
		
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        <div class="toggle-btn" onclick="toggleMode()">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
        </div>
    </div>
    <div class="container">
        <h2>Online Resume Builder</h2>
        <form action="generate_resume.php" method="POST" enctype="multipart/form-data">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number</label>
            <input type="text" name="phone" id="phone" required>

            <label for="address">Address</label>
            <input type="text" name="address" id="address" required>

            <label for="summary">Profile Summary</label>
            <textarea name="summary" id="summary" placeholder="Write a short summary about yourself..." required></textarea>

            <label for="education">Education</label>
            <textarea name="education" id="education" placeholder="List your educational background..." required></textarea>

            <label for="experience">Work Experience</label>
            <textarea name="experience" id="experience" placeholder="Describe your work experience..." required></textarea>

            <label for="skills">Skills</label>
            <textarea name="skills" id="skills" placeholder="List your skills..." required></textarea>

            <label for="profile_picture">Upload Profile Picture</label>
            <input type="file" name="profile_picture" id="profile_picture" required>

            <button type="submit">Generate Resume</button>
        </form>
    </div>

    <script>
        function toggleMode() {
            document.body.classList.toggle('dark-mode');
        }
    </script>
</body>
</html>
