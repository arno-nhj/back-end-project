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
        $PGID = $_POST['PGID'];
        $PGName = $_POST['PGName'];
        $PGAddress = $_POST['PGAddress'];
        $PGEmail = $_POST['PGEmail'];
        $PGPhone = $_POST['PGPhone'];
        $PupilID = $_POST['PupilID'];
        $sql = "INSERT INTO `pg`(`PG_ID`, `PG_NAME`, `PG_ADDRESS`, `PG_EMAIL`, `PG_PHONE`, `P_ID`) 
        VALUES ('$PGID','$PGName','$PGAddress','$PGEmail','$PGPhone','$PupilID')";
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