<?php
try{
    $id = $_POST["id"];
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $lacz = mysqli_connect('localhost','root','','gymorla');
    $pyt = "INSERT INTO `uzytkownicy`(`id`, `imie`, `nazwisko`) VALUES ('$id','$imie','$nazwisko')";
    $wyn = mysqli_query($lacz, $pyt);
    mysqli_close($lacz);
    echo "Added user";
}
catch (\Throwable $e) {
    echo "Caught exception or error: " . $e->getMessage();
    echo "<br>";
    echo "<h1>try again.</h1><br>";
}


?>
<form action="addtodatabase.php" method="post">
    <button type="submit">powrot</button>
</form>


