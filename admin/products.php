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
                    <h2 class="card-header display-2 text-center">Insert Product Here</h2>
                    <form action="" class="p-5">
                        <div class="mb-2">
                            <label for="">Product Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Product Category</label>
                           <select class="form-control">
                                <option>Select any category</option>
                                <option>Cosmetics</option>
                                <option>Clothes</option>
                                <option>Furniture</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="">Product Price</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Discount Price</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Product Image</label>
                            <input type="file" class="form-control">
                        </div>
                        <div class="mb-2">
                            <input type="submit"  Value="Insert Product" class=" btn  btn-success form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>