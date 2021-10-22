<!-- Display Student Report Card, Which contains field like Name, RollNo, 
    Year Of Passing. Different subject marks should be displayed with its grade.
Note:  use table tag -->


<?php include '../../header.php' ?>


    <!--MAIN CONTENT-->
    <section id="main">
        <div class="row me-0">
            <div class="col-lg-3">
                <?php include '../html_sidebar.php'; ?>
            </div>
            <div class="col-lg-9">
                <div class="container py-5 text-center" id="content">
                
                <table border="1" align="center" width="70%">
                    <caption><b>REPORT CARD</b></caption>
                        <thead>
                            <tr>
                                <td colspan="3" align="center">
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
                            <tr align="center">
                                <th>Physics</th>
                                <td>90</td>
                                <td>AA</td>
                            </tr>
                            <tr align="center">    
                                <th>Maths</th>
                                <td>93</td>
                                <td>AA</td>
                            </tr>
                            <tr align="center">    
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

<?php include '../../footer.php'; ?>    
