<?php
include("include/header.php")
?>
<body>
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="gender"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <select name="Gender" placeholder="Gender" style="margin: 6px 30px;" id="gender">
                                <option value="male">Male</option><option value="female">Female</option></select>
                            </div>

                            <div class="form-group" style="display: inline">
                                <label for="dateofbirth"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <h4 style="margin-top: 30px">Birthday:</h4>
                                <input type="text" name="date" id="date" placeholder="Date"/>
                                <input type="text" name="month" id="month" placeholder="Month"/>
                                <input type="text" name="year" id="year" placeholder="Year"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="address" id="address" placeholder="Your Address"/>
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="phone" id="phone" placeholder="Your Phone Number"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input onclick="register();" type="button" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/point.png" alt="sing up image"></figure>
                        <a href="signin.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>