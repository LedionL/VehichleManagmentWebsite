<?php
// Start session to check if user is logged in
session_start();
// Redirect to login page if user is not logged in
if(!isset($_SESSION["user_id"])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Cars</title>
    <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            background-color: #f8f9fa;
        }
        h2 {
            text-align: center;
            margin-top: 40px;
            color: #343a40;
        }
        .content-table-container {
            margin: 40px auto;
            max-width: 1200px;
            max-height: 400px;
            overflow-y: auto;
            border: 1px solid #ddd;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .content-table {
            width: 100%;
            border-collapse: collapse;
        }
        .content-table thead {
            position: sticky;
            top: 0;
            z-index: 100;
            background-color: #007bff;
            color: white;
        }
        .content-table th, .content-table td {
            padding: 15px;
            text-align: center;
        }
        .content-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }
        .content-table tbody tr:hover {
            background-color: #e9ecef;
        }
        .content-table tbody tr:last-of-type {
    border-bottom: 2px solid #007bff; 
}

.content-table tbody td:nth-child(5),
.content-table tbody td:nth-child(6),
.content-table tbody td:nth-child(7) {
    width: 15%;
}
        .edit, .delete, .btn-success {
            width: 80px;
            height: 30px;
            padding: 5px 10px;
            font-size: 14px;
            border-radius: 5px;
            transition: background-color 0.3s;
            cursor: pointer;
            margin: 0 auto;
        }
        .edit {
            background-color: #ffc107;
            color: black;
            border: 1px solid transparent;
        }
        .edit:hover {
            background-color: #e0a800;
        }
        .delete {
            background-color: #dc3545;
            color: white;
            border: 1px solid transparent;
        }
        .delete:hover {
            background-color: #c82333;
        }
        .form-select {
    width: 100%; 
}
    </style>
</head>
<?php
require_once("header.php");
?>
<body>
    <br>
    <h2>Car Management</h2>
    <div class="content-table-container">
        <table class="content-table table table-striped">
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
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
            require_once 'database.php';

            $stmt = $pdo->query('SELECT * FROM cars');
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $stmt = $pdo->query('SELECT DISTINCT body FROM cars');
            $bodies = $stmt->fetchAll(PDO::FETCH_COLUMN);

            $stmt = $pdo->query('SELECT DISTINCT cond FROM cars');
            $conds = $stmt->fetchAll(PDO::FETCH_COLUMN);

            $stmt = $pdo->query('SELECT DISTINCT fuel FROM cars');
            $fTypes = $stmt->fetchAll(PDO::FETCH_COLUMN);

            foreach ($users as $row) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['year'] . '</td>';
                echo '<td>' . $row['brand'] . '</td>';

                echo '<td><select class="form-select body-select">';
                foreach ($bodies as $body) {
                    $body = trim($body);
                    $selected = in_array($body, explode(',', $row['body'])) ? 'selected="selected"' : '';
                    echo '<option value="' . $body . '" ' . $selected . '>' . $body . '</option>';
                }
                echo '</select></td>';

                echo '<td><select class="form-select cond-select">';
                foreach ($conds as $cond) {
                    $cond = trim($cond);
                    $selected = in_array($cond, explode(',', $row['cond'])) ? 'selected="selected"' : '';
                    echo '<option value="' . $cond . '" ' . $selected . '>' . $cond . '</option>';
                }
                echo '</select></td>';

                echo '<td><select class="form-select fuel-select">';
                foreach ($fTypes as $type) {
                    $type = trim($type);
                    $selected = in_array($type, explode(',', $row['fuel'])) ? 'selected="selected"' : '';
                    echo '<option value="' . $type . '" ' . $selected . '>' . $type . '</option>';
                }
                echo '</select></td>';

                echo '<td>' . $row['price'] . '€' . '</td>';

                echo '<td><button type="button" class="btn btn-success"><i class="bx bx-check"></i></button></td>';
                echo '<td><button class="edit btn btn-warning" data-id="' . $row['id'] . '">Edit</button></td>';
                echo '<td><button class="btn btn-danger" data-id="' . $row['id'] . '"><i class="bx bxs-user-x"></i></button></td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
    </div>


    <script>
    $(document).ready(function () {
        $('.edit').click(function () {
            $('.edit').show();
            $('.btn-success').prop('disabled', true);
            
            $('.content-table tbody tr td').attr('contenteditable', 'false');
            
            var row = $(this).closest('tr');
            row.find('td:nth-child(n+2):nth-last-child(n+4)').not(':has(select)').attr('contenteditable', 'true');
            row.find('.btn-success').prop('disabled', false);
            $(this).hide(); 
            
            row.find('td:first-child, td:nth-last-child(-n+3)').attr('contenteditable', 'false');
        });

        $('.btn-success').click(function () {
            var row = $(this).closest('tr');
            var id = row.find('td:first').text();
            var name = row.find('td:nth-child(2)').text();
            var year = row.find('td:nth-child(3)').text();
            var brand = row.find('td:nth-child(4)').text();
            var body = row.find('select.body-select').val(); 
            var cond = row.find('select.cond-select').val(); 
            var fuel = row.find('select.fuel-select').val(); 
            var price = row.find('td:nth-child(8)').text();

            $.ajax({
                url: 'processTablesEdit.php', 
                type: 'POST',
                data: { id: id, name: name, year: year, brand: brand, body: body, cond: cond, fuel: fuel, price: price },
                success: function (response) {
                    var data = JSON.parse(response);
                    if (data.success) {
                        alert('Car Data updated successfully!');
                        $('.btn-success').prop('disabled', true);
                        $('.edit').show();
                    } else {
                        alert('Error updating data: ' + data.error);
                    }
                },
                error: function () {
                    alert('Error updating data!');
                }
            });
        });

        $('.btn-danger').click(function () {
            if (confirm("Are you sure you want to delete this user?")) {
                var row = $(this).closest('tr');
                var id = row.find('td:first').text();

                $.ajax({
                    url: 'processTablesDelete.php', 
                    type: 'POST',
                    data: { id: id },
                    success: function (response) {
                        var data = JSON.parse(response);
                        if (data.success) {
                            alert('Car deleted successfully!');
                            row.remove();
                        } else {
                            alert('Error deleting user: ' + data.error);
                        }
                    },
                    error: function () {
                        alert('Error deleting user!');
                    }
                });
            }
        });
    });
    </script>
</body>
</html>