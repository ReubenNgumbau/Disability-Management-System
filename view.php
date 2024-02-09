<?php
// Include database connection file
require_once "connection.php";
require_once "sidebar.php";

// Attempt select query execution
$sql = "SELECT * FROM disabled";
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>View Disabled People</title>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
            <style>
                body {
                    font-family: 'Roboto', sans-serif;
                    background-color: #f4f4f4;
                    color: #333;
                    margin: 0;
                    padding: 0;
                }

                .container {
                    max-width: 900px;
                    margin: 40px auto;
                    padding: 20px;
                    background-color: #fff;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    border-radius: 8px;
                    margin-left: 380px;
                }

                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 20px;
                    margin-left: 10px;
                }

                th,
                td {
                    text-align: left;
                    padding: 12px;
                    border-bottom: 1px solid #ddd;
                }

                th {
                    background-color: #007bff;
                    color: white;
                }

                tr:nth-child(even) {
                    background-color: #f2f2f2;
                }
            </style>
        </head>

        <body>
            <div class="container">
                <h2>List of Disabled People</h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>County</th>
                        <th>Disability Type</th>
                        <th>Contact Info</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td>
                                <?php echo htmlspecialchars($row['name']); ?>
                            </td>
                            <td>
                                <?php echo htmlspecialchars($row['age']); ?>
                            </td>
                            <td>
                                <?php echo htmlspecialchars($row['gender']); ?>
                            </td>
                            <td>
                                <?php echo htmlspecialchars($row['county']); ?>
                            </td>
                            <td>
                                <?php echo htmlspecialchars($row['disability_type']); ?>
                            </td>
                            <td>
                                <?php echo htmlspecialchars($row['contact_info']); ?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <script src="assets/js/main.js"></script>

            <!-- ====== ionicons ======= -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        </body>

        </html>
        <?php
        // Free result set
        mysqli_free_result($result);
    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>