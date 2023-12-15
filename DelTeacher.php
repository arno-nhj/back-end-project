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
        $sql = "DELETE FROM `teacher` WHERE TEACHER_ID='$TeacherID'";
       if (mysqli_query($link, $sql)) {
         echo "Record deleted successfully";
       } else {
         echo "Error deleting record ";
       }
    //}
?></h1>
<a href="index.html">Go back to home page→→→→→→</a>
</body>
</html>