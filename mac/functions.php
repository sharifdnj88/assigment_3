<?php




function marriageAgeCal( $name, $gender, $byear ){

$age = 2022 - $byear; /**real age */


if( $gender == "Male" ){
  $wait = 21 - $age;
}

if( $gender == "Female" ){
  $wait = 18 - $age;
}

if( $gender == "Male" && $age >= 21 ){
  return " <p style=\"padding:5px;box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);border-radius:10px;text-align:center;margin-top:5px;color:#000;font-weight:bold;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);background-color:#FEA443\";> Name: {$name}. <br> Gender: {$gender}. <br> You are ready for marriage. </p>";
}else if( $gender == "Female" && $age >=18 ){
  return " <p style=\"padding:5px;box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);border-radius:10px;text-align:center;margin-top:5px;color:#000;font-weight:bold;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);background-color:#FEA443\";> Name: {$name}. <br> Gender: {$gender}. <br> You are ready for marriage. </p>";
}else{
  return " <p style=\"padding:10px;box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);border-radius:10px;text-align:center;margin-top:5px;color:#000;font-weight:bold;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);background-color:#FEA443\";> Name: {$name}. <br>  Gender: {$gender}. <br> We are sorry ! You have to wait  {$wait} years for your marriage. </p>";
}

}


?>