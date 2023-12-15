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
        $PupilID = $_POST['PupilID'];
        $PupilName = $_POST['PupilName'];
        $PupilAge = $_POST['PupilAge'];
        $PupilAddress = $_POST['PupilAddress'];
        $MedInfo = $_POST['MedInfo'];
        $PupilEmail = $_POST['PupilEmail'];
        $PupilPhone = $_POST['PupilPhone'];
        $ClassID = $_POST['ClassID'];
        $sql = "INSERT INTO `pupil`(`P_ID`, `P_NAME`, `P_AGE`, `P_ADDRESS`, `M_INFO`, `P_EMAIL`, `P_PHONE`, `CLASS_ID`)
        VALUES ('$PupilID','$PupilName',$PupilAge,'$PupilAddress','$MedInfo','$PupilEmail','$PupilPhone','$ClassID')";
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