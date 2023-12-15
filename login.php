
<?php

$conn =  mysqli_connect("localhost", "root", "", "st_alphonsus");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$style = "";
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT 'level' FROM login WHERE username='$username' AND pass='$password'";
//$result = mysqli_query($conn, $sql);
//$row = mysqli_fetch_array($result, 'MYSQLI_ASSOC');
//$level = $row['level'];

//$result = $conn->query($sql);
//echo"$level";

/*while ($row = $sql->fetch_assoc()){

    {echo($row['username']);}

}*/



//if (mysqli_query($conn, $sql)) {
if (mysqli_query($conn, $sql)){
    echo "Login successful";
  } else {
    echo "User not found";
    $style = "style='display:none;'";
  }
/*if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "Login successful";
    } else {
        echo "Invalid password";
        $style = "style='display:none;'";
    }
} else {
    echo "User not found";
    $style = "style='display:none;'";
}*/

$conn->close();
?>
<div  <?php echo $style;?>>
    <a href="index.html">Go to home page→→→→→→</a>
<div>