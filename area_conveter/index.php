<?php

include_once "./mathmetical_functions.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area-Conveter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    

<div class="container my-5">
        <div class="row justify-content-center">

       

            <div class="col-md-4 my-3 ">
                <div class="card shadow" style="background-color: #EBF5FB;border-radius:20px;">  
                

                    <div class="card-body">                       
                       <h2 class="text-center">Area Conveter</h2>
                       <hr>

                       <!-- Form Start -->
                       

                       <form action="" method="POST">

                           <!-- Type -->
                           <div class="my-3">
                            <label for="" class="fw-bold">Type</label>
                                <select name="type" class="form-select text-center">
                                        <option  value="select" >--select--</option>
                                        <option value="r">Rectangle</option>
                                        <option value="s">Square</option>
                                        <option value="t">Triangle</option>
                                        <option value="c">Circle</option>
                                </select>
                           </div> 

                           <!-- Length -->
                           
                           <div class="my-3">
                               <label for="">Length</label>
                               <input name="length" type="number" class="form-control">
                           </div>

                           <!-- Width -->
                           
                           <div class="my-3">
                               <label for="">Width</label>
                               <input name="width" type="number" class="form-control">
                           </div>
                           
                          
                           <!-- Submit -->
                                                    
                           <div class="my-3 text-center">                            
                            <input name="submit" type="submit" class="btn btn-danger justify-content-center" value="Submit">
                           </div>
                       </form>

                       <!-- Form End -->

                    </div>

                    <div class="card-footer bg-success" style="border-radius:0px 0px 20px 20px">
                        
                        <?php

                        if( isset($_POST['submit']) ){
                            // get value

                            $type = $_POST['type'];
                            $length = $_POST['length'];
                            $width = $_POST['width'];

                            if( empty($length) || empty($width) ){
                                echo "<p class=\"alert alert-danger d-flex justify-content-between fade show shadow\";>All filds are required ! <button class=\"btn-close\"; data-bs-dismiss=\"alert\";></button> </p>";
                            }else if( $type=="select" ){
                                echo "<p class=\"alert alert-danger d-flex justify-content-between fade show shadow\";>All filds are required ! <button class=\"btn-close\"; data-bs-dismiss=\"alert\";></button> </p>";
                            }else{
                                echo getArea($type, $length, $width);
                            }
                        }
                        
                        
                        
                        
                        ?>

                       
                    </div>

                </div>
            </div>


       




        </div>     


    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>