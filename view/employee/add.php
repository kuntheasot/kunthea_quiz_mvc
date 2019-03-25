<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <title>Add Page</title>
</head>
<body>
    <main class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card bg-light shadow-lg">
                <div class="card-header text-center">Information Form</div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <!-- input username -->
                        <div class="form-group">
                            <input type="text" name="fname" class="form-control" placeholder="First name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="lname" class="form-control" placeholder="last name" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="number" name="age" class="form-control" placeholder="Age" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="number" name="salary" class="form-control" placeholder="Salary" required>
                        </div>
                        
                        <!-- button submit and reset -->
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="btn-user" >Add</button>
                            <button class="btn btn-warning float-right" type="reset" name="reset">Cancel</button>
                        </div>
                    </form>
                </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    </div>
</main>
</body>
</html>

