<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>
<style>
  
    h4{
        background-color: red;
        border-radius: 50px;
        margin-top:20px;
    }
    .checked{
        color:orange;
    }
</style>
<body>
<?php include_once("menu.php"); ?>

     <div class="container">
         <?php
         foreach ($products as $n => $v){
             ?>
             <h4 style="text-align:center"><?php echo $n; ?></h4>
             <div class="card-group">
                    <?php foreach ($v as $n1 => $v1){
                        ?>
                     <div class="card">
                    <img class="card-img-top" src="<?php echo $v1 ['image']; ?>" alt="Card image cap">
                    <div class="card-body">
                    <h6 class="card-title"><?php echo $v1 ['name']; ?></h6>
                    <p class="card-text"><?php echo $v1 ['price']; ?></p>
                    <p class="card-text"><small class="text-muted"> <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span> 
                    <?php echo $v1 ['danhgia']; ?></small></p>
                </div>
             </div>
             <?php
         }
         ?>
         </div>
         <?php
         }
         ?>
              </div>
              </body>
</html>
