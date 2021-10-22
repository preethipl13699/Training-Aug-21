<!--Create Login Form with field UserName and Password field.-->
       
<?php include '../../header.php' ?>
    <!--MAIN CONTENT-->
    <section id="main">
        <div class="row me-0">
            <div class="col-lg-3">
                <?php include '../html_sidebar.php'; ?>
            </div>
            <div class="col-lg-9">
                <div class="container py-5 text-start" id="content">
                    <h1>Login</h1>
                    <form id="login" method="GET">
                        <fieldset>
                            <label for = "Username">Username :</label>
                            <input type="text" name="username" placeholder="Enter Username" required><br/><br/>
                        
                            <label for = "Password">Password :</label>
                            <input type="password" name="password" placeholder="Enter Password" required><br/><br/>
                        
                            <input type="submit" value="Login">
                            <input type="reset" value="Cancel"><br/><br/>

                            <a href="register.html">New user?Click here to register</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>                
<?php include '../../footer.php' ?>    