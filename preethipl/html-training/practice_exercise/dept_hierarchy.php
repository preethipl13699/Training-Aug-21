<!-- You are working in some company as HR. you have been assigned a task to arrange department hierarchy example: employee working under some manager.
Note: Use Ordered and unordered list with its list-style-type attribute, practice nested list as  well-->

<?php include '../../header.php' ?>

    <!--MAIN CONTENT-->
    <section id="main">
        <div class="row me-0">
            <div class="col-lg-3">
                <?php include '../html_sidebar.php'; ?>
            </div>
            <div class="col-lg-9">
                <div class="container py-5 text-start" id="content">
                <h2>Department Hierarchy</h2>
                    <ul type="disc">
                        <li><b>Human Resources</b>
                            <ul type="disc">
                                <li>Manager
                                    <ol type="i">
                                        <li>Hitesh Shah</li>
                                        <li>Mansi Patel</li>
                                    </ol>
                                </li>   
                                <li>Assistant
                                    <ol type="i">
                                        <li>Prachi Patel</li>
                                        <li>Srushti Deshmukh</li>
                                    </ol>
                                </li>  
                            </ul>
                        </li>    
                        <li><b>Technology Center</b>
                            <ol type="1">
                                <li>PHP
                                    <ol type="i">
                                        <li>Preethi P.L</li>
                                        <li>Hiral Mod</li>
                                    </ol>
                                </li>       
                                <li>.NET
                                    <ol type="i">
                                        <li>Dhruti Kaila</li>
                                        <li>Barkha Mahajan</li>
                                    </ol>
                                </li>        
                                <li>Android
                                    <ol type="i">
                                        <li>Raj Thakkar</li>
                                        <li>Sonu Patel</li>
                                    </ol>
                                </li>    
                            </ol> 
                        </li>    
                    </ul>                
                </div>
            </div>
        </div>
    </section>                
    

<?php include '../../footer.php' ?>
