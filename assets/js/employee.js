$(document).ready (function() {
    fetch_employee();
})

function fetch_employee() {
   $.ajax({
        url:"http://localhost/codeminz/ajax-crud-php/app/employee/manage_employee.php",
        method:"GET",
        success: function (response){
            console.log(response);

        }
   })
}
// /codeminz/ajax-crud-php/app/employee/manage_employee.php