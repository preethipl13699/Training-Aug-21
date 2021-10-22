<!--Provide text alignment to center to student Report Card which is created  in Day1 assignment-->
<?php include '../../header.php' ?>

    <!--MAIN CONTENT-->
    <section id="main">
        <div class="row me-0">
            <div class="col-lg-3">
                <?php include '../css_sidebar.php'; ?>
            </div>
            <div class="col-lg-9">
                <div class="container py-5 text-start" id="content">
                    <table border="1"  width="70%" style="text-align: center;">
                        <caption><b>REPORT CARD</b></caption>
                        <thead>
                            <tr>
                                <td colspan="3">
                                Name: Riya Shah <br/>
                                Roll No: 43<br/>
                                Year of Passing: 2017</td>
                            </tr>
                            <tr>
                                <th>Subjects</th>
                                <th>Marks</th>
                                <th>Grade</th>
                            </tr>
                               
                        </thead>
                        <tbody>
                            <tr>
                                <th>Physics</th>
                                <td>90</td>
                                <td>AA</td>
                            </tr>
                            <tr>    
                                <th>Maths</th>
                                <td>93</td>
                                <td>AA</td>
                            </tr>
                            <tr>    
                                <th>Chemistry</th>
                                <td>88</td>
                                <td>AB</td>
                            </tr>
                        </tbody>
                    </table>
                
                </div>
            </div>
        </div>
    </section>                    
<?php include '../../footer.php' ?>    