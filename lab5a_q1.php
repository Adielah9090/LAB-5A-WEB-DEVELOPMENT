<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
    // Define variables for the additional details
    $name = "Nur 'Adielah Binti Azhari";
    $matricNumber = "DI220115";
    $course = "Bachelor of Computer Science (Web Technology) with Honours ";
    $yearOfStudy = "3rd Year";
    $address = "N0.21, Taman Mas Jaya, Jalan Salleh, 84000 Muar Johor";
    ?>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td><strong>Name</strong></td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td><strong>Matric Number</strong></td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td><strong>Course</strong></td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td><strong>Year of Study</strong></td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td><strong>Address</strong></td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>