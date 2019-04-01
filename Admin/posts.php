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
        <!-- page title -->
        <form class="form-group">
        <h4>Page Title</h4>
        <input type="text" name="title"/>
        <h4>Content</h4>
        <textarea maxlength="5000" rows="10" name="content"></textarea>
        <input type="submit" class="btn-primary">
        </form>
        <?php
        //include("include/footer.php")
        ?>
        </div>
    </body>
</html>