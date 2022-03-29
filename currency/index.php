<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Conveter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4 my-5 ">
                <div class="card shadow-lg" style="background-color: #EBF5FB;border-radius:20px">
                    <div class="card-body">
                        <h3 class="text-center"  data-bs-toggle="tooltip" title="Currency Conveter">Basic Currency Conveter</h3>
                        <hr>
                        <form action="" method="POST">
                            <label for="" class="fw-bold">Select your Currency</label>
                        <select name="currency" class="form-select text-center">
                            <option  value="select" >--select--</option>
                            <option value="USD To Taka"> $ USD To Taka</option>
                            <option value="CAD To Taka">$ CAD To Taka</option>
                            <option value="POUND To Taka">£ POUND To Taka</option>
                            <option value="EURO To Taka">€ EURO To Taka</option>
                            <option value="WON To Taka">₩ WON To Taka</option>
                        </select><br><br><br>
                        <label for="" class="fw-bold">Enter Your amount</label>
                        <input type="number" name="amount" placeholder="enter your amount" class="form-control"><br><br>
                        <div class="my-1 text-center">
                        <input type="submit" name="submit" value="Convert" class="btn btn-danger">
                        </div>
                        </form>
                    </div>
                    <div class="card-footer  text-center fw-bold" style="border-radius: 0px 0px 20px 20px;color:#000;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);background-color:#FEA443">

                        <?php
                        
                            if( isset($_POST['submit']) ){
                                $currency=$_POST['currency'];
                                $amount=$_POST['amount'];
                                $select=$_POST['select'] ?? '';
                               

                                if( empty($amount) ){
                                    echo "<p class=\"alert alert-danger d-flex justify-content-between fade show shadow\";>All filds are required ! <button class=\"btn-close\"; data-bs-dismiss=\"alert\";></button> </p>";
                                }else if( $currency =="select" ){

                                    echo "<p class=\"alert alert-danger d-flex justify-content-between fade show shadow\";>All filds are required ! <button class=\"btn-close\"; data-bs-dismiss=\"alert\";></button> </p>";

                               
                            
                            }
                                
                                    
                                    // USD To Taka
                                else if( $currency=="USD To Taka" ){
                                    echo $amount. " Dollar "." = ";
                                    echo $amount*86.54;
                                    echo " Taka ";

                                   
                                }
                                else if( $currency=="CAD To Taka" ){
                                    echo $amount. " CAD "." = ";
                                    echo $amount*69.04;
                                    echo " Taka ";
                                }

                                else if( $currency=="POUND To Taka" ){
                                    echo $amount. " pound "." = ";
                                    echo $amount*114.15;
                                    echo " Taka ";
                                }

                                else if( $currency=="EURO To Taka" ){
                                    echo $amount. " EURO "." = ";
                                    echo $amount*95.06;
                                    echo " Taka ";
                                }

                                else if( $currency=="WON To Taka" ){
                                    echo $amount. " Won "." = ";
                                    echo $amount*0.071;
                                    echo " Taka ";
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

