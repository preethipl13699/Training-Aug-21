//Check Employee Id
function checkid( id)
{
    var pattern = /^E\-\d{3,}/g;
    var id = document.getElementById("id").value;
    if(pattern.test(id) == false)
    {
            alert("Invalid Employee Id!");
    }
    else
    {
        id = id.split("-");
        var id1 = parseInt(id[1]);
        if(id1 < 001)
        {
            alert("Invalid Employee Id!");
        }
    }
}

//Check age
function checkage(age)
{
    var age = document.getElementById("age").value;
    if(isNaN(age) == true)
    {
        alert("Age should be a number!");
    }
}

//Check email
function checkemail(email)
{
    var email = document.getElementById("email").value;
    var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/g;
    email = email.toLowerCase();
    if(pattern.test(email) == false)
    {
        alert("Invalid email id!");
    }             

}

//Check Date
function checkdate(date)
{
    var date = document.getElementById("joiningdate").value;
    var pattern = /^(0?[1-9]|[12][0-9]|3[01])\-(0?[1-9]|1[012])\-\d{4}$/;
            
            if(pattern.test(date) == false)
            {
                alert("Invalid Date");
            }
            else
            {
                var date = date.split("-");
                var dd = parseInt(date[0]);
                var mm = parseInt(date[1]);
                var yyyy = parseInt(date[2]);
                
                //Check month & day & year
                if (mm < 1 || mm > 12 || yyyy <= 0000 || yyyy >= 9999)
                {
                    alert("Invalid Date!");
                }
                else if (mm == 2)
                {
                    //Check leap year
                    if (((yyyy%4 != 0 && yyyy%100 == 0) || (yyyy%400 != 0)) && (dd < 1 || dd > 29))
                    {
                        alert("Invalid Date!");
                    }
                }
                //Month having 30 days
                else if ((mm == 4 || mm == 6 || mm == 9 || mm == 11) && (dd < 1 && dd > 30))
                {
                    alert("Invalid Date");
                }
                //Month having 31 days
                else if ((mm == 1 || mm == 3 || mm == 5 || mm == 7 || mm == 8 || mm == 10 || mm == 12)  && (dd < 1 && dd > 31))
                {
                    alert("Invalid Date");
                } 
            }
}

// Check if any field is empty
// function isempty()
// {
//     var id = document.getElementById("id").value;
//     var name = document.getElementById("name").value;
//     var age = document.getElementById("age").value;
//     var designation = document.getElementById("designation").value;
//     var salary = document.getElementById("salary").value;
//     var email = document.getElementById("email").value;
//     var joiningdate = document.getElementById("joiningdate").value;
//     var contact = document.getElementById("contact").value;
//     if( id == "")
//     {
//         alert("Id should not be empty!");
//     }
//     else if( name == "")
//     {
//         alert("Name should not be empty!");
//     }
//     else if( age == "")
//     {
//         alert("Age should not be empty!");
//     }
//     else if( designation == "")
//     {
//         alert("Designation should not be empty!");
//     }
//     else if( salary == "")
//     {
//         alert("Salary should not be empty!");
//     }
//     else if( email == "")
//     {
//         alert("Email should not be empty!");
//     }
//     else if( joiningdate == "")
//     {
//         alert("Date of Joining should not be empty!");
//     }
//     else if( contact == "")
//     {
//         alert("Contact Number should not be empty!");
//     }
// }

//Check if any field is empty using for loop
function isempty()
{
    var check = document.getElementsByTagName("input");
    for(var i=0; i < check.length; i++)
    {
        if (check[i].value == "")
        {
            var x = alert("Field cannot be empty");
            x.close();
        }
    }
}