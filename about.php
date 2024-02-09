<?php
include "sidebar.php";

$title = "About Our Disability Management System";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title; ?>
    </title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 980px;
            margin: auto;
            overflow: hidden;
            padding: 0 20px;
            margin-right: 45px;
        }

        header {
            background: #50a3a2;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #077187 3px solid;
        }

        header h1 {
            text-align: center;
            margin: 0;
            padding-bottom: 10px;
        }

        .content {
            padding: 20px;
            background: #fff;
            margin-top: 20px;
        }

        .content h2,
        .content p {
            text-align: left;
        }

        footer {
            background: #50a3a2;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container content">
        <h2>Welcome to Lerosho Disability Management System</h2>
        <p>
            Our Disability Management System is designed with inclusivity at its core, offering comprehensive support
            for individuals with disabilities. Our goal is to provide an accessible, user-friendly platform that
            facilitates the management of disability-related needs, services, and support.
        </p>
        <p>
            This system features an array of tools and resources tailored to assist both individuals experiencing
            disabilities and the organizations that support them. From scheduling assistance and resource allocation to
            comprehensive reporting and analytics, our system is equipped to handle diverse needs efficiently and
            effectively.
        </p>

        <h2>Features:</h2>
        <ul>
            <li>Customizable user management</li>
            <li>Resource Allocation and Management</li>
            <li>Exclusive user friendly features</li>
            <li>Accessibility Options</li>
            <li>Comprehensive Reporting and Analytics</li>
        </ul>

        <p>
            We are dedicated to continual improvement and welcome feedback from our users to make our system even
            better. If you have suggestions or need support, please contact us.
        </p>
    </div>

    <!-- <footer>
        <p>Disability Management System &copy; 2024</p>
    </footer> -->
</body>
<script src="assets/js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>