<?php

    function dynamic_header($name = null, $TAG = "H1", $FONT="14px", $COLOR = "PRIMARY", $ALIGN = "LEFT"){
        
        return " <{$TAG} style=\"font-size:{$FONT};color:{$COLOR};text-align:{$ALIGN};background-color:#EBF5FB;border-radius:20px;box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);\"; > {$name} </{$TAG}>  ";
    }



?>