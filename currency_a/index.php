<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advance Currency Conveter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4 my-5 ">
                <div class="card shadow-lg" style="background-color: #EBF5FB;border-radius:20px">
                    <div class="card-body">
                        <h3 class="text-center fs-4"   title="Advance Currency Conveter">Advance Currency Conveter</h3>
                        <hr>
                        <form action="" method="POST">
                            <!-- currency from -->
                        <div class="my-3">
                        <label for="" class="fw-bold">Currency From</label>
                            <select name="from" class="form-select text-center">
                                <option  value="select" >--select--</option>
                                <option value="USD">USD</option>
                                <option value="CAD">CAD</option>
                                <option value="POUND">POUND</option>
                                <option value="EURO">EURO</option>
                                <option value="WON">WON</option>
                            </select>
                        </div>

                        <!-- Currency To -->

                        <div class="my-3">
                            <label for="" class="fw-bold">Currency To</label>
                            <select name="to" class="form-select text-center">
                                <option  value="select" >--select--</option>
                                <option value="TAKA">TAKA</option>
                                <option value="INR">INR</option>
                                <option value="PR">P.INR</option>
                                <option value="DIRHAM">DIRHAM</option>
                                <option value="REAL">REAL</option>
                            </select>
                        </div>

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
                                $from=$_POST['from'];
                                $to=$_POST['to'];
                                $amount=$_POST['amount'];
                                $select=$_POST['select'] ?? '';
                               
                               

                                if( empty($amount) ){
                                    echo "<p class=\"alert alert-danger d-flex justify-content-between fade show shadow\";>All filds are required ! <button class=\"btn-close\"; data-bs-dismiss=\"alert\";></button> </p>";
                                }else if($from =="select") {

                                    echo "<p class=\"alert alert-danger d-flex justify-content-between fade show shadow\";>All filds are required ! <button class=\"btn-close\"; data-bs-dismiss=\"alert\";></button> </p>";

                                // if( $from =="select" ){
                                //     echo "<p class=\"alert alert-danger d-flex justify-content-between fade show shadow\";>All filds are required ! <button class=\"btn-close\"; data-bs-dismiss=\"alert\";></button> </p>";
                                // 
                            }

                                else if( $to =="select" ){
                                    echo "<p class=\"alert alert-danger d-flex justify-content-between fade show shadow\";>All filds are required ! <button class=\"btn-close\"; data-bs-dismiss=\"alert\";></button> </p>";
                                }
                                
                                    
                                    // USD Start
                                else if( $from=="USD" && $to=="TAKA" ){
                                    
                                    echo "{$amount} USD = ";
                                    echo $amount*86.54;
                                    echo " TAKA";

                                   
                                }

                                else if( $from=="USD" && $to=="INR" ){
                                    
                                    echo "{$amount} USD = ";
                                    echo $amount*76.29;
                                    echo " INR";

                                   
                                }

                                else if( $from=="USD" && $to=="PR" ){
                                    
                                    echo "{$amount} USD = ";
                                    echo $amount*182.78;
                                    echo " P.INR";

                                   
                                }

                                else if( $from=="USD" && $to=="DIRHAM" ){
                                    
                                    echo "{$amount} USD = ";
                                    echo $amount*3.67;
                                    echo " DIRHAM";

                                   
                                }

                                else if( $from=="USD" && $to=="REAL" ){
                                    
                                    echo "{$amount} USD = ";
                                    echo $amount*4.74;
                                    echo " REAL";

                                   
                                }


                                // USD End


                                // CAD Start

                                else if( $from=="CAD" && $to=="TAKA" ){
                                    
                                    echo "{$amount} CAD = ";
                                    echo $amount*69.33;
                                    echo " TAKA";

                                   
                                }

                                else if( $from=="CAD" && $to=="INR" ){
                                    
                                    echo "{$amount} CAD = ";
                                    echo $amount*61.11;
                                    echo " INR";

                                   
                                }

                                else if( $from=="CAD" && $to=="PR" ){
                                    
                                    echo "{$amount} CAD = ";
                                    echo $amount*146.42;
                                    echo " P.INR";

                                   
                                }

                                else if( $from=="CAD" && $to=="DIRHAM" ){
                                    
                                    echo "{$amount} CAD = ";
                                    echo $amount*2.94;
                                    echo " DIRHAM";

                                   
                                }

                                else if( $from=="CAD" && $to=="REAL" ){
                                    
                                    echo "{$amount} CAD = ";
                                    echo $amount*3.80;
                                    echo " REAL";

                                   
                                }


                                // CAD End



                                // Pound Start




                                else if( $from=="POUND" && $to=="TAKA" ){
                                    
                                    echo "{$amount} POUND = ";
                                    echo $amount*114.06;
                                    echo " TAKA";

                                   
                                }

                                else if( $from=="POUND" && $to=="INR" ){
                                    
                                    echo "{$amount} POUND = ";
                                    echo $amount*100.54;
                                    echo " INR";

                                   
                                }

                                else if( $from=="POUND" && $to=="PR" ){
                                    
                                    echo "{$amount} POUND = ";
                                    echo $amount*240.91;
                                    echo " P.INR";

                                   
                                }

                                else if( $from=="POUND" && $to=="DIRHAM" ){
                                    
                                    echo "{$amount} POUND = ";
                                    echo $amount*4.84;
                                    echo " DIRHAM";

                                   
                                }

                                else if( $from=="POUND" && $to=="REAL" ){
                                    
                                    echo "{$amount} POUND = ";
                                    echo $amount*6.25;
                                    echo " REAL";

                                   
                                }


                                // Pound End


                                // Euro Start


                                else if( $from=="EURO" && $to=="TAKA" ){
                                    
                                    echo "{$amount} EURO = ";
                                    echo $amount*94.73;
                                    echo " TAKA";

                                   
                                }

                                else if( $from=="EURO" && $to=="INR" ){
                                    
                                    echo "{$amount} EURO = ";
                                    echo $amount*83.78;
                                    echo " INR";

                                   
                                }

                                else if( $from=="EURO" && $to=="PR" ){
                                    
                                    echo "{$amount} EURO = ";
                                    echo $amount*200.33;
                                    echo " P.INR";

                                   
                                }

                                else if( $from=="EURO" && $to=="DIRHAM" ){
                                    
                                    echo "{$amount} EURO = ";
                                    echo $amount*4.02;
                                    echo " DIRHAM";

                                   
                                }

                                else if( $from=="EURO" && $to=="REAL" ){
                                    
                                    echo "{$amount} EURO = ";
                                    echo $amount*5.19;
                                    echo " REAL";

                                   
                                }


                                // Euro End



                                // Won Start



                                else if( $from=="WON" && $to=="TAKA" ){
                                    
                                    echo "{$amount} WON = ";
                                    echo $amount*0.071;
                                    echo " TAKA";

                                   
                                }
                                
                                else if( $from=="WON" && $to=="INR" ){
                                    
                                    echo "{$amount} WON = ";
                                    echo $amount*0.062;
                                    echo " INR";

                                   
                                }

                                else if( $from=="WON" && $to=="PR" ){
                                    
                                    echo "{$amount} WON = ";
                                    echo $amount*0.15;
                                    echo " P.INR";

                                   
                                }

                                else if( $from=="WON" && $to=="DIRHAM" ){
                                    
                                    echo "{$amount} WON = ";
                                    echo $amount*0.0030;
                                    echo " DIRHAM";

                                   
                                }

                                else if( $from=="WON" && $to=="REAL" ){
                                    
                                    echo "{$amount} WON = ";
                                    echo $amount*0.0039;
                                    echo " REAL";

                                   
                                }


                                // Won End
                               

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

