<!--Design a form for storing employee details. 
(Employee name, age, Gender, designation, salary, location, Email ID, Date of Joining and contact number)
Validation required:
    Age should be a number
    Each field should contain value
    Email ID should be in proper format
    Date of joining should be in date format
Location should be in the drop down list
Use radio buttons for Gender-->


<?php include '../../header.php' ?>

    <!--MAIN CONTENT-->
    <section id="main">
        <div class="row me-0">
            <div class="col-lg-3">
                <?php include '../html_sidebar.php'; ?>
            </div>
            <div class="col-lg-9">
                <div class="container py-5 text-start" id="content">
                    <h2>Employee Details</h2>
                    <form>
                        <fieldset>
                        <label for="Name">Name:</label>
                        <input type="text" name="name" placeholder="Enter Name" required><br/><br/>
                        <label for="Age">Age:</label>
                        <input type="number" name="age" min="16" placeholder="Enter Age" required><br/><br/>
                        <label for="Gender">Gender:</label>
                        <label for="Male">Male</label>
                        <input type="radio" name="gender" value="Male" required>
                        <label for="Female">Female</label>
                        <input type="radio" name="gender" value="Female"><br/><br/>
                        <label for="Designation">Designation:</label>
                        <input type="text" name="designation" placeholder="Enter Designation" required><br/><br/>
                        <label for="Salary">Salary:</label>
                        <input type="number" name="salary" placeholder="Enter Salary" min="0" step="1000" required><br/><br/>
                        <label for="Location">Location:</label>
                        <select name="location" required>
                            <option value="" disabled selected>--Select City--</option>
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Baroda">Baroda</option>
                            <option value="Surat">Surat</option>
                            <option value="Rajkot">Rajkot</option>
                        </select><br/><br/>
                        <label for="Email">Email ID:</label>
                        <input type="email" name="email" placeholder="Enter Email" required><br/><br/>
                        <label for="Date of joining">Date of Joining:</label>
                        <input type="date" name="dateofjoining" required><br/><br/>
                        <label for="mobileno">Mobile Number:</label>
                        <input type="tel" name="mobileno" placeholder="Enter mobile number" pattern="[0-9]{10}" required><br/><br/>
                        <input type="submit" value="Submit">
                        <input type="reset" value="Clear">
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>                
        
<?php include '../../footer.php'; ?>        