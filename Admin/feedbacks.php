<?php
include("../include/header.php")
?>
    <body>
        <!-- Copied from W3Schools -->

        <div class="sidenav" style="margin-top: 150px">
            <a href="AdminPanel.php" style="font-size: 18px">Admin Home Page</a>
            <a href="users.php" style="font-size: 18px">Show Users</a>
            <a href="feedbacks.php" style="font-size: 18px">Feedbacks</a>
            <a href="posts.php" style="font-size: 18px">Posts</a>
        </div>

        <div class="main">
        <!-- To select table name of database to be shown -->
    
<?php 
            //Display feedback
            //open connection
            $server = "localhost";
            $user = "root";
            $pass = "";
            $dbname = "testing";
            // creating connection
            $connect = new msqli($server, $user, $pass, $dbname);
            
            //Check if connection to database success
            if ($connect->connect_error) {
                die("Connection failed: " . $connect->connect_error);
            }
            
            $query = "SELECT * FROM feedback";
               $result = $connect->query($sql);
    
                //if query result is not zero
                if ($result->num_rows > 0) {
                    //The header of the table
                    echo "<table><tr><th>ID</th><th>Username</th></tr>";
                    //each row output
                    while($row = $result->fetch_assoc()){
                        echo"<tr><td>".$row[""]."</td><td>".$row[""]."</td></tr>";
                    }
                    echo "</table>";
                } else { 
                    echo "No Results";
                }
                $conn->close();  
            ?>
        
        <?php
        include("../include/footer.php")
        ?>
        </div>
    </body>
</html>