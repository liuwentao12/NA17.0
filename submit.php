
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Connect to the database
$con = mysqli_connect('127.0.0.1', 'root', 'password', 'nazhaoxin2024');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = "";

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $student_name = $_POST["student_name"];
    $major = $_POST["major"];
    $class_ = $_POST["class_"];
    $gender = $_POST["gender"];
	$telephone_number = $_POST["telephone_number"];
    $department_1 = $_POST["department_1"];
    $department_2 = $_POST["department_2"];

    // Insert data into database
    $stmt = mysqli_prepare($con, "INSERT INTO applications (student_name, major, class_, gender, telephone_number, department_1, department_2) VALUES (?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sssssss", $student_name, $major, $class_, $gender, $telephone_number, $department_1, $department_2);

    if (mysqli_stmt_execute($stmt)) {
        $message = '<div class="alert alert-success" role="alert">';
        $message .= "【${student_name}】提交成功,期待你的加入！";
        $message .= '</div>';
    } else {
        $error = mysqli_error($con);
        $message = '<div class="alert alert-danger" role="alert">';
        $message .= "【${student_name}】提交失败, 出了点小状况，请联系管理员！" . $error;
        $message .= '</div>';
    }
    mysqli_close($con);
}
?>

<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPLY JOIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body background="./images/Background image.jpg" style="background-repeat: no-repeat; background-attachment:fixed; background-size:100% 100%;">
    <div class="container mt-5">
        <?php 
        if(!isset($message) || empty($message)){
            echo "Submission Successful!";
        } else {
            echo $message; 
        }
        ?>
        <!-- Your form goes here -->
    </div>
</body>
</html>
