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
        <form class="form-control" method="get" action="users.php" class="form-control" style="margin-top: 150px">
            <select name="tablename[]">
                <option value="user">Users</option>
                <option value="consultant">Doctors</option>
            </select>
      
            <!-- For later search name or id easier -->
            <input type="text" name="text"/> 
            <select name="columnname[]">
                <option value="id">ID</option>
                <option value="name">Name</option>
                <!-- <option>Other Column Added Later</option> -->
            </select>
            <input type="submit" name="search" value="Search"/>
            <input type="submit" name="delete" value="Delete"/>
            <input type="submit" name="update" value="Update"/>
        </form>

        <!-- reference from https://www.w3schools.com/php/php_mysql_select.asp -->
<?php
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

            $tablename = $_GET['tablename'];
            $tablechosen = "";
            foreach($tablename as $selected){
                $tablechosen = $selected;
                echo "choose ".$tablechosen;
            }

            $text = $_GET['text'];
            $column = $_GET['columnname'];
            $columnchosen = "";
            foreach($column as $selected){
                $columnchosen = $selected;
                echo "<br>choose ".$columnchosen;}
                  //query command
           $query = "SELECT id, name FROM $tablechosen WHERE $columnchosen = $text";
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
        //include("include/footer.php")
        ?>
        </div>
    </body>
</html>