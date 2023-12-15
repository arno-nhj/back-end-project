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
        $PGID = $_POST['PGID'];
	//if (isset($_POST['submit'])) {
        /*$C8 = "";
        $C9 = "";
        $C10 = "";
        $C11 = "";
        $C12 = "";
        $C8 = $_POST['C_PGName'];
        $C9 = $_POST['C_PGAddress'];
        $C10 = $_POST['C_PGEmail'];
        $C11 = $_POST['C_PGPhone'];
        $C12 = $_POST['C_PupilID'];
        $X = 0;
        while ($X == 0) {
            if($C8=="yes"){*/
                $PGName = $_POST['PGName'];
                //$sql = "UPDATE `pg` SET `PG_NAME`='$PGName' WHERE PG_ID='$PGID'";
            //}
            //if($C9=="yes"){
                $PGAddress = $_POST['PGAddress'];
                //$sql = "UPDATE `pg` SET `PG_ADDRESS`='$PGAddress' WHERE PG_ID='$PGID'";
            //}
            //if($C10=="yes"){
                $PGEmail = $_POST['PGEmail'];
                //$sql = "UPDATE `pg` SET `PG_EMAIL`='$PGEmail' WHERE PG_ID='$PGID'";
            //}
            //if($C11=="yes"){
                $PGPhone = $_POST['PGPhone'];
                //$sql = "UPDATE `pg` SET `PG_PHONE`='$PGPhone' WHERE PG_ID='$PGID'";
            //}
            //if($C12=="yes"){
                $PupilID = $_POST['PupilID'];
                //$sql = "UPDATE `pg` SET `P_ID`='$PupilID' WHERE PG_ID='$PGID'";
            //}
            //$X = 1;
        //}


        $sql = "UPDATE `pg` SET `PG_NAME`='$PGName',`PG_ADDRESS`='$PGAddress',`PG_EMAIL`='$PGEmail',`PG_PHONE`='$PGPhone',`P_ID`='$PupilID' WHERE `PG_ID`='$PGID'";
        
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