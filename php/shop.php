<?php include "include/Header.php"; ?>
<?php include "include/Navbar.php"; ?>
<?php include "include/Connectdb.php"; ?>
<?php
    $sql = "SELECT * FROM `boeken` ORDER BY `boeken`.`Rank` ASC"; 
    $sth = $db->prepare($sql); 
    $sth->execute(); 
    while($row = $sth->fetch()) { 
    ?>
    <img src="/media/boeken/<?php echo $row["img"]?>.png">
    <?php
    echo "<br>";
    echo $row["Title"];
    echo "<br>";
    echo $row["Price"];
    echo "<br>";
    ?>
    <form method="post" action="/php/boek.php">
        <input type="hidden" name="id" value="<?php echo $row["id"]?>">
        <input type="submit" class="btn btn-primary">
    </form>

    <?php } ?>
<?php include "include/Footer.php"; ?>