<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Save Data with AJAX</title>
</head>
<body>

<div class="container">
    <br>
    <div class="card">
        <div class="card-body">
            <form onsubmit="saveForm(event)" id="my_fom">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>

                <div class="form-group">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br>
            <div class="alert alert-success" role="alert" id="form_success" style="display: none"></div>
            <div class="alert alert-danger" role="alert" id="form_failed" style="display: none"></div>
        </div>
    </div>

    <div class="card">
        <div class="car-body">
            <table class="table" id="userTable" style="display: none">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                </tr>
                </thead>
                <tbody id="table_data">

                </tbody>
            </table>
        </div>
    </div>

</div>

<script src="js/ajax.js"></script>
</body>
</html>