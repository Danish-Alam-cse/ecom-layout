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
        <?php include_once("sidebar.php");?>

            <div class="col-lg-7 mx-auto">
                <div class="card bg-light shadow">
                    <h2 class="card-header display-2 text-center">Insert Category Here</h2>
                    <form action="" class="p-5">
                        <div class="mb-2">
                            <label for="">Category Title</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Category Description</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <input type="submit"  Value="Insert Category" class=" btn  btn-success form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>