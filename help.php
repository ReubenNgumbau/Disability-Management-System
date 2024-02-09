<?php
include"sidebar.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Lerosho Help Page</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 1000px;
            margin: auto;
            padding: 0 20px;
            margin-right: 45px;
        }
        .header, .footer {
            background-color: #005a87;
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
        }
        .main-content {
            background: #ffffff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #005a87;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        a {
            color: #005a87;
            text-decoration: none;
        }
        .footer {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- <div class="header">
            <h1>Disability Management System Help</h1>
        </div> -->

        <div class="main-content">
            <h2>Welcome to the Help Page</h2>
            <p>If you're encountering issues or have questions about how to navigate and utilize the Disability Management System, you're in the right place. Below you'll find a list of common questions and resources to help guide you.</p>

            <h3>Frequently Asked Questions (FAQs)</h3>
            <ul>
                <li><strong>How do I add a new person to the system?</strong><br>
                Navigate to the "Add Person" page from the main menu. Fill out the form with the person's details and submit.</li>
                <li><strong>What should I do if I encounter an error?</strong><br>
                If you encounter an error, please note the error message and contact our support team at support@example.com.</li>
                <li><strong>Can I update information for an existing entry?</strong><br>
                Yes, search for the person using the "Search" feature, then click on their name to edit their information.</li>
            </ul>

            <h3>Need More Help?</h3>
            <p>If the FAQs did not address your issue, please feel free to reach out for more support:</p>
            <ul>
                <li>Email: <a href="mailto:lerosho@gmail.com">lerosho@gmail.com</a></li>
                <li>Phone: <a href="tel:0721980578">+254 721980578</a></li>
            </ul>
        </div>

        <div class="footer">
            <p>&copy; <?php echo date("Y"); ?> Lerosho Disability Management System. All rights reserved.</p>
        </div>
    </div>
    <script src="assets/js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

