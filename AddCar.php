<?php
// This page checks if a session is started, as the user needs to be logged in to use it. 
// If they are not logged in, it redirects them to the login page.
session_start();
if(!isset($_SESSION["user_id"])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a new car</title>
    <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
    <!-- Bootstrap CSS for designing the front end of the website -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- CSS for designing the webpage, setting background color, positioning, and table styles -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container,
        .table-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .form-container h3 {
            text-align: center;
            margin-bottom: 30px;
            color: #007bff;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
            color: #495057;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }
        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        .table-container {
            max-height: 500px;
            max-width: 1100px;
            min-width: none;
            overflow-y: auto;
        }
        .content-table {
            width: 100%;
            border-collapse: collapse;
        }
        .content-table thead {
            background-color: #007bff;
            color: white;
        }
        .content-table th,
        .content-table td {
            padding: 10px 15px;
            text-align: center;
            border-bottom: 1px solid #dee2e6;
        }
        .content-table tbody tr:nth-of-type(even) {
            background-color: #f8f9fa;
        }
    </style>
</head>
<?php
// Including the header that helps the user navigate
require_once("header.php")
?>
<body>
<!-- HTML to design the basic structure of the webpage: the form and table for car details -->
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="form-container">
                    <h3>Add Car</h3>
                    <form action="processAddCar.php" method="post">
                        <div class="form-group">
                            <label for="name">Car Name:</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="year">Year of Production:</label>
                            <input type="text" name="year" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="brand">Car Brand:</label>
                            <input type="text" name="brand" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="body">Body type:</label>
                            <select name="body" class="form-control" required>
                                <option>Sedan</option>
                                <option>Van</option>
                                <option>Roadster</option>
                                <option>Coupe</option>
                                <option>Muscle Car</option>
                                <option>Sports car</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cond">Car Condition:</label>
                            <select name="cond" class="form-control" required>
                                <option>New</option>
                                <option>Like New</option>
                                <option>Great</option>
                                <option>Good</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fuel">Fuel Type:</label>
                            <select name="fuel" class="form-control" required>
                                <option>Gasoline</option>
                                <option>Electric</option>
                                <option>Hybrid</option>
                                <option>E82</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="text" name="price" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Car</button>
                    </form>
                </div>
            </div>
            <div class="col-md-7">
                <div class="table-container">
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Year</th>
                                <th>Brand</th>
                                <th>Body</th>
                                <th>Condition</th>
                                <th>Fuel</th>
                                <th>Price</th>
                            </tr>
                </thead>
                <tbody>
                <?php
                    // Including the database connection and fetching car details from the database
                    require_once 'database.php';
                    $stmt = $pdo->query('SELECT * FROM cars');
                    while ($row = $stmt->fetch()) {
                        echo '<tr>';
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td>' . $row['name'] . '</td>';
                        echo '<td>' . $row['year'] . '</td>';
                        echo '<td>' . $row['brand'] . '</td>';
                        echo '<td>' . $row['body'] . '</td>';
                        echo '<td>' . $row['cond'] . '</td>';
                        echo '<td>' . $row['fuel'] . '</td>';
                        echo '<td>' . $row['price'] . '€' . '</td>';
                        echo '</tr>';
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
<script>
    // JavaScript for handling form submission with AJAX
    document.getElementById('submitBtn').addEventListener('click', function() {
        var form = document.getElementById('articleForm');
        var formData = new FormData(form);
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    alert('New car record created successfully');
                    window.location.href = 'processAddCar.php';
                } else {
                    alert('Error: ' + xhr.responseText);
                    window.location.href = 'processAddCar.php';
                }
            }
        };
        xhr.open('POST', 'processAddCar.php', true);
        xhr.send(formData);
    });
</script>
</body>
</html>
