<!--Suppose html markup below, apply all h1 and h2 blue color.
<div>

        <h1>Heading1</h1>

        <h2>Sub Heading</h2>

        <h1>Heading2</h1>

        <h2>Sub heading</h2>

</div> -->
<?php include '../../header.php' ?>

    <!--MAIN CONTENT-->
    <section id="main">
        <div class="row me-0">
            <div class="col-lg-3">
                <?php include '../css_sidebar.php'; ?>
            </div>
            <div class="col-lg-9">
                <div class="container py-5 text-start" id="content">

                    <div id="headingcolor">

                        <h1>Heading1</h1>

                        <h2>Sub Heading</h2>

                        <h1>Heading2</h1>

                        <h2>Sub heading</h2>

                    </div>
                </div> 
            </div>
        </div>
    </section>
<?php include '../../footer.php' ?>                   
