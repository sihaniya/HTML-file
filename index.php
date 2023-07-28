<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX CRUD APPLICATION</title>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/style.css" rel="stylesheet">

<body>


    <div class="container">
        <div calss="card">
            <div class="mt-4 mb-3 text-center text-bg-info p-3">
                <h1>AJAX CRUD APPLICATION</h1>
            </div>

            <div class="card-body">
                <form class="row gx-3 gy-2 mb-3 align-items-center  p-3 mb-2 bg-warning text-dark ">
                    <div class="col-sm-3">
                        <label class="visually-hidden">Name</label>
                        <input type="text" class="form-control" id="" placeholder="NAME">
                    </div>
                    <div class="col-sm-3">
                        <label class="visually-hidden">EMAIL</label>
                        <input type="text" class="form-control" id="" placeholder="EMAIL">
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">name</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody id="manage_employee">
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>
                            <button class="btn btn-sm btn-success me-2">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <script src="./assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/plugins/jquery/jquery.min.js"></script>
    <script src="./assets/js/employee.js"></script>



</body>

</html>