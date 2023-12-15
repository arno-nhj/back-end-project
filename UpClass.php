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
        $ClassID = $_POST['ClassID'];
	//if (isset($_POST['submit'])) {
        /*$C13 = "";
        $C14 = "";
        $C15 = "";
        $C13 = $_POST['C_ClassName'];
        $C14 = $_POST['C_ClassCap'];
        $C15 = $_POST['C_TeacherID'];
        $X = 0;
        while ($X == 0) {
            if($C13=="yes"){*/
                $ClassName = $_POST['ClassName'];
                //$sql = "UPDATE `class` SET `CLASS_Name`='$ClassName' WHERE CLASS_ID='$ClassID'";
            //}
            //if($C14=="yes"){
                $ClassCap = $_POST['ClassCap'];
                //$sql = "UPDATE `class` SET `CLASS_CAPACITY`=$ClassCap WHERE CLASS_ID='$ClassID'";
            //}
            //if($C15=="yes"){
                $TeacherID = $_POST['TeacherID'];
                //$sql = "UPDATE `class` SET `TEACHER_ID`='$TeacherID' WHERE CLASS_ID='$ClassID'";
            //}
            //$X = 1;
        //}


        $sql = "UPDATE `class` SET `CLASS_NAME`='$ClassName',`CLASS_CAPACITY`='$ClassCap',`TEACHER_ID`='$TeacherID' WHERE `CLASS_ID`='$ClassID'";
        
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