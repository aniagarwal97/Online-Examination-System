<html>
<head>
<script type="text/javascript" src="./js/exam.js"></script>
<link rel="stylesheet" type="text/css" href="./css/exam.css">
</head>
<style>
#timer{
font-size:80px;}
</style>
<body>
<div id="timer">60:00:00</div>
<script>
countdown(60);
</script>
</body>
</html>
<?php
include("connect.php");
$sql = "SELECT test1.* FROM test1";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Question: " . $row["question"]. " <br> A.<input type='radio' value='a' name='a'>" . $row["option1"]. " <br> B.<input type='radio' value='b' name='b'> " . $row["option2"]. " <br> C.<input type='radio' value='c' name='c'> " . $row["option3"]. " <br> D.<input type='radio' value='d' name='d'> " . $row["option4"]. "<br><br><br><br>";
    }
} else {
    echo "0 results";
}
?>