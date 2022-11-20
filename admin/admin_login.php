<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php include_once("admin_nav.php");?>


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card bg-light shadow">
                    <h2 class="card-header display-2 text-center">Admin Login Here</h2>
                    <form action="" class="p-5">
                        <div class="mb-2">
                            <label for="">Admin Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Admin Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="mb-2">
                            <input type="submit"  Value="Login" class=" btn  btn-success form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>