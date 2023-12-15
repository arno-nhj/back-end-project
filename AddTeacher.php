<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body> 
<h1><?php
    $link = mysqli_connect("localhost", "root", "", "st_alphonsus");
// Check connection
    if ($link === false) {
        die("Connection failed: ");
    }
	//if (isset($_POST['submit'])) {
        $TeacherID = $_POST['TeacherID'];
        $TeacherName = $_POST['TeacherName'];
        $TeacherAddress = $_POST['TeacherAddress'];
        $TeacherSalary = $_POST['TeacherSalary'];
        $TeacherBG = $_POST['TeacherBG'];
        $sql = "INSERT INTO `teacher`(`TEACHER_ID`, `TEAHCER_NAME`, `TEACHER_ADDRESS`, `TEACHER_SALARY`, `TEACHER_BG`) 
        VALUES ('$TeacherID','$TeacherName','$TeacherAddress',$TeacherSalary,'$TeacherBG')";
       if (mysqli_query($link, $sql)) {
         echo "New record created successfully";
       } else {
         echo "Error adding record ";
       }
    //}
?></h1>
<a href="index.html">Go back to home page→→→→→→</a>
</body>
</html>