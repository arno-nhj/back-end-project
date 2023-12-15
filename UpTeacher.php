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
    $TeacherID = $_POST['TeacherID'];
	//if (isset($_POST['submit'])) {
        /*$C16 = "";
        $C17 = "";
        $C18 = "";
        $C19 = "";
        
        $C16 = $_POST['C_TeacherName'];
        $C17 = $_POST['C_TeacherAddress'];
        $C18 = $_POST['C_TeacherSalary'];
        $C19 = $_POST['C_TeacherBG'];
        $X = 0;*/
        //while ($X == 0) {
            //if($C16=="yes"){
                $TeacherName = $_POST['TeacherName'];
                //$sql = "UPDATE `teacher` SET `TEAHCER_NAME`='$TeacherName' WHERE TEACHER_ID='$TeacherID'";
            //}
            //if($C17=="yes"){
                $TeacherAddress = $_POST['TeacherAddress'];
                //$sql = "UPDATE `teacher` SET `TEACHER_ADDRESS`='$TeacherAddress' WHERE TEACHER_ID='$TeacherID'";
            //}
            //if($C18=="yes"){
                $TeacherSalary = $_POST['TeacherSalary'];
                //$sql = "UPDATE `teacher` SET `TEACHER_SALARY`='$TeacherSalary' WHERE TEACHER_ID='$TeacherID'";
            //}
            //if($C19=="yes"){
                $TeacherBG = $_POST['TeacherBG'];
                //$sql = "UPDATE `teacher` SET `TEACHER_BG`='$TeacherBG' WHERE TEACHER_ID='$TeacherID'";
            //}
            //$X = 1;
        //}
        $sql = "UPDATE `teacher` SET `TEAHCER_NAME`='$TeacherName',`TEACHER_ADDRESS`='$TeacherAddress',`TEACHER_SALARY`='$TeacherSalary',`TEACHER_BG`='$TeacherBG' 
        WHERE `TEACHER_ID`='$TeacherID'";
        
       if (mysqli_query($link, $sql)) {
         echo "Record updated successfully";
       } else {
         echo "Error updating record ";
       }
    //}
?></h1>
<a href="index.html">Go back to home page→→→→→→</a>
</body>
</html>