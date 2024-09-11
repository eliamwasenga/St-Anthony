
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Mycode/css/bootstrap.min.css">
    <link rel="stylesheet" href="Mycode/css/styles.css">
    <link rel="stylesheet" href="Mycode/css/w3.css">
    <title>Login Page</title>  
    <style>
        body {
            font-family: "Inconsolata", sans-serif;
        }
        .center {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        /* Container styling */
        .content {
            width: 100%;
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            box-sizing: border-box; /* Ensure padding is included in width */
        }

        /* Header styling */
        .w3-center {
            margin-bottom: 20px;
        }

        .w3-text-indigo {
            color: #4b0082;
        }

        /* Button styling */
        .w3-button {
            display: block;
            width: calc(100% - 20px); /* Adjust width to account for padding */
            padding: 15px;
            margin: 10px 0; /* Consistent vertical margin */
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-sizing: border-box; /* Ensure padding is included in width */
            overflow: hidden; /* Prevent overflow of hover effects */
        }

        .w3-button.w3-indigo {
            background-color: #007bff;
            color: #ffffff;
            border: none;
        }

        .w3-button.w3-indigo:hover {
            background-color: #0056b3;
            transform: scale(1.02); /* Slightly increase size but within bounds */
        }

        .w3-button.w3-indigo:active {
            background-color: #004494;
        }

        /* Error message styling */
        .student_error_message,
        .staff_error_message {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
  </style>
</head>
<body>
    
    <div class="content">
        <div class="w3-center">
        <div class="w3-center" style="padding-top: 16px;">
                <img src="Mycode/images/logo.jfif" alt="SCHOOL Logo" 
                    style="height: 110px;">
                <h4 class="w3-text-indigo">WELCOME AT ST ANTHONY'S ONLINE ACADEMIC SYSTEM</h4>
            </div>
            <h4 class="w3-text-indigo">SELECT CREDENTIAL TYPE</h4>
        </div>
        <p>
            <a href="../parent/login.php" class="w3-button w3-indigo">Parent/Guardians</a>
        </p>
        <p>
            <a href="login.php" class="w3-button w3-indigo">Staff Members</a>
        </p>
    </div>
</body>
</html>