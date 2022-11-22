<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


<?php include_once("admin_nav.php");?>

<div class="container mt-4">
    <div class="row">
            <?php include_once("sidebar.php");?>

        <div class="col-lg-10">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card bg-success text-light" style="height:200px;">
                        <h2 class="card-title text-center" style="line-height:200px;">Total Users
                        </h2>
                        <div class="card footer bg-success text-center">
                            <span class="text-light">10,00000</span>
                        </div>
                    </div>
                   
                </div>
                <div class="col-lg-4">
                <div class="card bg-info text-light" style="height:200px;">
                        <h2 class="card-title text-center"  style="line-height:200px;">Total Categories</h2>
                        <div class="card footer bg-info text-center">
                        <span class="text-light">10,00000</span>
                    </div>
                </div>
                    
                </div>
                <div class="col-lg-3">
                <div class="card bg-warning text-light" style="height:200px;">
                        <h2 class="card-title text-center"  style="line-height:200px;">Total Products</h2>
                        <div class="card footer bg-warning text-center">
                            <span class="text-light">10,00000</span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>