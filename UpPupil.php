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
    $PupilID = $_POST['PupilID'];
	//if (isset($_POST['submit'])) {
        /*$C1 = "";
        $C2 = "";
        $C3 = "";
        $C4 = "";
        $C5 = "";
        $C6 = "";
        $C7 = "";
        
        $C1 = $_POST['C_PupilName'];
        $C2 = $_POST['C_PupilAge'];
        $C3 = $_POST['C_PupilAddress'];
        $C4 = $_POST['C_MedInfo'];
        $C5 = $_POST['C_PupilEmail'];
        $C6 = $_POST['C_PupilPhone'];
        $C7 = $_POST['C_ClassID'];
        $X = 0;
        while ($X == 0) {*/
            //if($C1=="yes"){
                $PupilName = $_POST['PupilName'];
                //$sql = "UPDATE `pupil` SET `P_NAME`='$PupilName' WHERE P_ID='$PupilID'";
            //
            //if($C2=="yes"){
                $PupilAge = $_POST['PupilAge'];
                //$sql = "UPDATE `pupil` SET `P_AGE`=$PupilAge WHERE P_ID='$PupilID'";
            //}
            //if($C3=="yes"){
                $PupilAddress = $_POST['PupilAddress'];
                //$sql = "UPDATE `pupil` SET `P_ADDRESS`='$PupilAddress' WHERE P_ID='$PupilID'";
            //}
            //if($C4=="yes"){
                $MedInfo = $_POST['MedInfo'];
                //$sql = "UPDATE `pupil` SET `M_INFO`='$MedInfo' WHERE P_ID='$PupilID'";
            //}
            //if($C5=="yes"){
                $PupilEmail = $_POST['PupilEmail'];
                //$sql = "UPDATE `pupil` SET `P_EMAIL`='$PupilEmail' WHERE P_ID='$PupilID'";
            //}
            //if($C6=="yes"){
                $PupilPhone = $_POST['PupilPhone'];
                //$sql = "UPDATE `pupil` SET `P_PHONE`='$PupilPhone' WHERE P_ID='$PupilID'";
            //}
            //if($C7=="yes"){
                $ClassID = $_POST['ClassID'];
                //$sql = "UPDATE `pupil` SET `CLASS_ID`='$ClassID' WHERE P_ID='$PupilID'";
            //}
            //$X = 1;
        //}
        $sql = "UPDATE `pupil` SET `P_NAME`='$PupilName',`P_AGE`=$PupilAge,`P_ADDRESS`='$PupilAddress',`M_INFO`='$MedInfo',
        `P_EMAIL`='$PupilEmail',`P_PHONE`='$PupilPhone',`CLASS_ID`='$ClassID' WHERE `P_ID`='$PupilID'";
        
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