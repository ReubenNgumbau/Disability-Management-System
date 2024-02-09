<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lerosho Disability Management System</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">Lerosho DstMngS</span>
                    </a>
                </li>

                <li>
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="add_person.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Add Person</span>
                    </a>
                </li>

                <li>
                    <a href="view.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Disabled People List</span>
                    </a>
                </li>

                <li>
                    <a href="help.php">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>

                <li>
                    <a href="about.php">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">About</span>
                    </a>
                </li>

                <li>
                    <a href="terms.php">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Terms</span>
                    </a>
                </li>

                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <?php
                // Include your database connection file
                require_once "connection.php";

                // Prepare a SQL query to count the total number of people
                $sql = "SELECT COUNT(*) as total_people FROM disabled";

                // Execute the query
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $total_people = $row['total_people'];

                // Close the database connection
                mysqli_close($conn);
                ?>

                <!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Total People Added</title>
                    <style>
                        /* Add your CSS styles here */
                        .card {
                            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                            transition: 0.3s;
                            width: 100%;
                            padding: 20px;
                            text-align: center;
                            margin: 10px;
                        }

                        .numbers,
                        .cardName {
                            font-size: 20px;
                            margin: 10px 0;
                        }

                        .iconBx {
                            font-size: 50px;
                            margin: 10px 0;
                        }
                    </style>
                </head>

                <body>

                    <div class="card">
                        <div>
                            <div class="numbers">
                                <?php echo number_format($total_people); ?>
                            </div>
                            <div class="cardName">Total People Added</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>
                    </div>

                </body>

                </html>


                <div class="card">
                    <div>
                        <div class="numbers" id="countyCount">Loading...</div>
                        <div class="cardName">Counties</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        // Make an AJAX call to the PHP script
                        var xhr = new XMLHttpRequest();
                        xhr.open('GET', 'getUniqueCounties.php', true);
                        xhr.onload = function () {
                            if (this.status == 200) {
                                // Update the content of the .numbers div with the response
                                document.getElementById('countyCount').textContent = this.responseText;
                            }
                        };
                        xhr.send();
                    });
                </script>


                <div class="card">
                    <div>
                        <div class="numbers" id="popularAgeRange">Loading...</div>
                        <div class="cardName">Popular Age Range</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        // Make an AJAX call to the PHP script
                        var xhr = new XMLHttpRequest();
                        xhr.open('GET', 'getPopularAgeRange.php', true);
                        xhr.onload = function () {
                            if (this.status == 200) {
                                // Update the content of the .numbers div with the response
                                document.getElementById('popularAgeRange').textContent = this.responseText;
                            } else {
                                // Handle error
                                document.getElementById('popularAgeRange').textContent = 'Error loading data';
                            }
                        };
                        xhr.send();
                    });
                </script>


                <div class="card">
                    <div>
                        <div class="numbers" id="mostAffectedGender">Loading...</div>
                        <div class="cardName">Most Affected Gender</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        // Make an AJAX call to the PHP script
                        var xhr = new XMLHttpRequest();
                        xhr.open('GET', 'getMostAffectedGender.php', true);
                        xhr.onload = function () {
                            if (this.status == 200) {
                                // Update the content of the .numbers div with the response
                                document.getElementById('mostAffectedGender').textContent = this.responseText;
                            }
                        };
                        xhr.send();
                    });
                </script>

            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recently Added Disabled Persons</h2>
                        <a href="view.php" class="btn">View All</a>
                    </div>
                    <?php
                    // Assuming you have already established a database connection
                    include 'connection.php';
                    // Fetch data from the database
                    $sql = "SELECT name, age, gender, county, disability_type, contact_info FROM disabled";
                    $result = mysqli_query($conn, $sql);

                    // Initialize an empty array to store fetched data
                    $users = array();

                    // Check if there are any records
                    if (mysqli_num_rows($result) > 0) {
                        // Fetch each row and store it in the $users array
                        while ($row = mysqli_fetch_assoc($result)) {
                            $users[] = $row;
                        }
                    }

                    // Close database connection
                    mysqli_close($conn);
                    ?>

                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title></title>
                        <style>
                            <style>body {
                                font-family: Arial, sans-serif;
                                margin: 20px;
                            }

                            table {
                                width: 100%;
                                border-collapse: collapse;
                                margin-top: 20px;
                            }

                            thead {
                                background-color: lightblue;
                                color: #ffffff;
                                margin-top: 20px;
                            }

                            th,
                            td {
                                text-align: left;
                                padding: 8px;
                                border: 1px solid #ddd;
                            }

                            tbody tr:nth-child(even) {
                                background-color: #f2f2f2;
                            }

                            tbody tr:hover {
                                background-color: #ddd;
                            }

                            @media screen and (max-width: 600px) {
                                table {
                                    width: 100%;
                                }

                                th,
                                td {
                                    display: block;
                                    width: 100%;
                                }

                                th,
                                td {
                                    text-align: right;
                                    padding-left: 50%;
                                }

                                th,
                                td:before {
                                    content: attr(data-label);
                                    position: absolute;
                                    left: 0;
                                    width: 50%;
                                    padding-left: 15px;
                                    font-weight: bold;
                                    text-align: left;
                                }
                            }
                        </style>
                    </head>

                    <body>
                        <table>
                            <thead>
                                <tr>
                                    <td>Name</td>
                                    <td>Age</td>
                                    <td>Gender</td>
                                    <td>County</td>
                                    <td>Disability Type</td>
                                    <td>Contact Info</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td>
                                            <?php echo $user['name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $user['age']; ?>
                                        </td>
                                        <td>
                                            <?php echo $user['gender']; ?>
                                        </td>
                                        <td>
                                            <?php echo $user['county']; ?>
                                        </td>
                                        <td>
                                            <?php echo $user['disability_type']; ?>
                                        </td>
                                        <td>
                                            <?php echo $user['contact_info']; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </body>

                    </html>
                </div>
                <!-- ================= New Customers ================ -->
                <?php
include 'connection.php';

// Fetch data from the database
$sql = "SELECT county, COUNT(*) as count FROM disabled GROUP BY county";
$result = $conn->query($sql);

$data = [];
while($row = $result->fetch_assoc()) {
    $data[] = [
        'county' => $row['county'],
        'count' => $row['count']
    ];
}

// Prepare data for the pie chart
$labels = array_column($data, 'county');
$values = array_column($data, 'count');

// Convert data to JSON
$labels_json = json_encode($labels);
$values_json = json_encode($values);

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affected Counties Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .recentCustomers {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="recentCustomers">
    <div class="cardHeader">
        <h2>Affected Counties Chart</h2>
    </div>
    <canvas id="pieChart"></canvas>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('pieChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: <?php echo $labels_json; ?>,
                datasets: [{
                    label: 'Number of Disabled by County',
                    data: <?php echo $values_json; ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Affected Counties'
                    }
                }
            }
        });
    });
</script>

</body>
</html>


            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>