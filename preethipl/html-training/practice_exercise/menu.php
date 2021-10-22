<!--Create Horizontal menu. Menu item will Home, AboutUs, ContactUS.
    Use Nav tag and anchor tag-->

<?php include '../../header.php' ?>
    <!--MAIN CONTENT-->
    <section id="main">
        <div class="row me-0">
            <div class="col-lg-3">
                <?php include '../html_sidebar.php'; ?>
            </div>
            <div class="col-lg-9">
                <div class="container py-5 text-start" id="content">
                <nav>
                    <a href="home.html">Home</a>  | 
                    <a href="about.html">AboutUs</a>  | 
                    <a href="contact.html">ContactUs</a>
                </nav>
                </div>
            </div>
        </div>
    </section>                
<?php include '../../footer.php' ?>    