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
        $ClassID = $_POST['ClassID'];
        $ClassName = $_POST['ClassName'];
        $ClassCap = $_POST['ClassCap'];
        $TeacherID = $_POST['TeacherID'];
        $sql = "INSERT INTO `class`(`CLASS_ID`, `CLASS_NAME`, `CLASS_CAPACITY`, `TEACHER_ID`) 
        VALUES ('$ClassID','$ClassName',$ClassCap,'$TeacherID')";
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