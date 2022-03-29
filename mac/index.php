<?php

include_once "./functions.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marriage age check</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <div class="container my-5">
        <div class="row justify-content-center">

       

            <div class="col-md-4 my-3 ">
                <div class="card shadow" style="background-color: #EBF5FB;border-radius:20px;">  
                

                    <div class="card-body">                       
                       <h2 class="text-center">Marriage age check</h2>
                       <hr>
                       <form action="" method="POST">
                           <!-- Name -->
                           <div class="my-3">
                            <label for="" class="fw-bold">Name</label>
                            <input name="name" type="text" class="form-control">
                           </div>                           
                           
                           <!-- Age -->

                           <div class="my-3">
                            <label for="" class="fw-bold">Birth-Year</label>
                            <input name="byear" type="text" class="form-control">
                           </div>

                           <!-- Gender -->

                           <div class="my-3">
                                <label for="">Gender</label>
                                <input name="gender" type="radio" value="Male" id="male"> <label for="Male">Male</label>
                                <input name="gender" type="radio" value="Female" id="female"> <label for="Female">Female</label>
                            </div> 
                           
                           <!-- Submit -->
                                                    
                           <div class="my-3 text-center">                            
                            <input name="submit" type="submit" class="btn btn-danger justify-content-center" value="Check">
                           </div>
                       </form>
                    </div>

                    <div class="card-footer bg-success" style="border-radius:0px 0px 20px 20px">
                        
                        <?php

                        if( isset($_POST['submit']) ){

                            // get form value

                            $name   = $_POST['name'];
                            $byear    = $_POST['byear'];
                            $gender = $_POST['gender'] ?? '';

                            if( empty($name) || empty($byear) || empty($gender) ){
                                echo "<p class=\"alert alert-danger d-flex justify-content-between fade show shadow\";>All filds are required ! <button class=\"btn-close\"; data-bs-dismiss=\"alert\";></button> </p>";
                            }else if( $byear <=1980 || $byear >=2023 ){
                                echo "<p class=\"alert alert-danger d-flex justify-content-between fade show shadow\";> Please enter valid Birth-Year ! <button class=\"btn-close\"; data-bs-dismiss=\"alert\";></button> </p>";
                              }else{
                                if( $gender=="Male" ){                                    
                                    echo marriageAgeCal( $name, $gender, $byear );
                                }
                                if( $gender=="Female" ){                                    
                                    echo marriageAgeCal( $name, $gender, $byear );
                                }
                                
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