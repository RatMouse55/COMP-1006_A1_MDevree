<?php
require_once('database.php');
$res = $database->read();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Queue</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/table.css">
</head>

<body>
    <header>
        <nav>
            <a href="view.php">View Queue</a>
            <a href="index.php">Place Order</a>
        </nav>
    </header>

    <main>
        <h1>i cooka da pizza</h1>
        <h2>Order Queue</h2>
        <table>
            <tr>
                <th>Order ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>Delivery Address</th>
                <th>Pizza</th>
            </tr>
            <?php
            while ($r = mysqli_fetch_assoc($res)) {
                ?>
                <tr>
                    <td>
                        <?php echo $r['id']; ?>
                    </td>
                    <td>
                        <?php echo $r['fname']; ?>
                    </td>
                    <td>
                        <?php echo $r['lname']; ?>
                    </td>
                    <td>
                        <?php echo $r['email']; ?>
                    </td>
                    <td>
                        <?php echo $r['phone']; ?>
                    </td>
                    <td>
                        <?php echo $r['del_address']; ?>
                    </td>
                    <td>
                        <?php echo $r['pizza']; ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>

    </main>
</body>

</html>