<?php include "../include/Header.php"; ?>
<?php include "../include/Navbar.php"; ?>
<?php include "../include/Connectdb.php"; ?>
<br><br><br>
<br><br>
<div class="chat1">
    <?php 
    
    ?>
        
            <?php
                $sql = "SELECT * FROM `chatbox`";
                $sth = $db->prepare($sql); 
                $sth->execute(); 
                while($row = $sth->fetch()) {
                echo "<br><br>";
                echo "<div class='chat'>";
                echo "<div class='boxxx'>";
                ?> 
                <div class='text1' id="chat<?php echo $row['id']?>" data-id="<?php echo $row['id']?>">;
                <?php
                $sql1 = "SELECT * FROM `berichten` WHERE chatbox_id = :chatbox_id";
                $sth1 = $db->prepare($sql1); 
                $sth1->execute([":chatbox_id" => $row['id']]); 
                while($row1 = $sth1->fetch()) {
                    if ($row1['aadmin'] == 1) {
                        echo "<div class='admin'>";
                        echo $row1['textt'];
                        echo "<br>";
                        echo "</div>";
                    } else {
                        echo $row1['textt'];
                        echo "<br>";
                    }
                }
            echo "<br><br>";
            ?>
        </div>
        </div>
            <div class="inpute">
                <form method="post" action="AdminCreatbox.php">
                    <input type="hidden" name="chatboxid" value="<?php echo $row['id'] ?>">
                    <input type="text" name="chatboxUserMessage" id="chatboxUserMessage" placeholder="Typ hier je bericht..." autofill="fals">
                    <input type="submit" name="chatboxUserVerstuur" id="chatboxUserVerstuur" value="Verstuur">
                </form>
                <form method="post" action="DellChat.php">
                    <input type="hidden" name="chatboxid" value="<?php echo $row['id'] ?>">
                    <input type="submit" name="chatboxUserVerstuur" id="chatboxUserVerstuur" value="dell">
                </form>
                </div>
            </div>
        <?php
        }
        ?>
        
</div>
<?php include "../include/Footer.php"; ?>