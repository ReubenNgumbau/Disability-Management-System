<?php
include "sidebar.php";
// Initialize variables to hold form data and error messages
$name = $age = $disabilityType = $contactInfo = $gender = $county = "";
$nameErr = $ageErr = $disabilityTypeErr = $contactInfoErr = $genderErr = $countyErr = ""; // Initialize $genderErr

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = true; // Flag to track overall form validity

    // Validate name
    if (empty(trim($_POST["name"]))) {
        $nameErr = "Name is required.";
        $isValid = false;
    } else {
        $name = trim($_POST["name"]);
    }

    // Validate county
    if (empty(trim($_POST["county"]))) {
        $nameErr = "County is required.";
        $isValid = false;
    } else {
        $county = trim($_POST["county"]);
    }

    // Validate age
    if (empty(trim($_POST["age"]))) {
        $ageErr = "Age is required.";
        $isValid = false;
    } elseif (!is_numeric($_POST["age"])) {
        $ageErr = "Age must be a number.";
        $isValid = false;
    } else {
        $age = trim($_POST["age"]);
    }

    // Validate disability type
    if (empty(trim($_POST["disability_type"]))) {
        $disabilityTypeErr = "Disability type is required.";
        $isValid = false;
    } else {
        $disabilityType = trim($_POST["disability_type"]);
    }

    // Validate contact info
    if (empty(trim($_POST["contact_info"]))) {
        $contactInfoErr = "Contact info is required.";
        $isValid = false;
    } else {
        $contactInfo = trim($_POST["contact_info"]);
    }

    // Validate gender
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required.";
        $isValid = false;
    } else {
        $gender = $_POST["gender"];
    }

    // Insert data into the database if the form is valid
    if ($isValid) {
        require_once "connection.php"; // Database connection file

        $sql = "INSERT INTO disabled (name, age, gender, county, disability_type, contact_info) VALUES (?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "sissss", $param_name, $param_age, $param_gender, $param_county, $param_disabilityType, $param_contactInfo);

            // Set parameters
            $param_name = $name;
            $param_age = $age;
            $param_gender = $gender;
            $param_county = $county;
            $param_disabilityType = $disabilityType;
            $param_contactInfo = $contactInfo;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('Record added successfully.'); window.location.href='add_person.php';</script>";
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);

        // Close connection
        mysqli_close($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Disabled Person</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
        }

        input[type=text],
        button {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-family: 'Roboto', sans-serif;
        }

        input[type=text] {
            transition: border-color 0.3s;
        }

        input[type=text]:focus {
            border-color: #007bff;
            outline: none;
        }

        .error {
            color: #dc3545;
            margin-top: 5px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: 500;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
                margin: 20px auto;
            }

            label,
            input[type=text],
            button {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .container {
                max-width: 100%;
                margin: 10px auto;
                padding: 10px;
            }

            label,
            input[type=text],
            button {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Add Disabled Person</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $name; ?>">
                <span class="error">
                    <?php echo $nameErr; ?>
                </span>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="text" id="age" name="age" value="<?php echo $age; ?>">
                <span class="error">
                    <?php echo $ageErr; ?>
                </span>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender">
                    <option value="male" <?php if ($gender == 'male')
                        echo 'selected="selected"'; ?>>Male</option>
                    <option value="female" <?php if ($gender == 'female')
                        echo 'selected="selected"'; ?>>Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="county">County:</label>
                <input type="text" id="county" name="county" value="<?php echo $county; ?>">
                <span class="error">
                    <?php echo $countyErr; ?>
                </span>
            </div>
            <div class="form-group">
                <label for="disability_type">Disability Type:</label>
                <input type="text" id="disability_type" name="disability_type" value="<?php echo $disabilityType; ?>">
                <span class="error">
                    <?php echo $disabilityTypeErr; ?>
                </span>
            </div>
            <div class="form-group">
                <label for="contact_info">Contact Info:</label>
                <input type="text" id="contact_info" name="contact_info" value="<?php echo $contactInfo; ?>">
                <span class="error">
                    <?php echo $contactInfoErr; ?>
                </span>
            </div>
            <button type="submit">Add Person</button>
        </form>
    </div>
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>