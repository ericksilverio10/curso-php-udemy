<?php

// AND &&
if(5 > 2 && 2 < 5){
    echo "true <br>";
} else{
    echo "false <br>";
}
// OR ||
if(is_integer(300) || is_bool(true)){
    echo "true <br>";
} else{
    echo "false <br>";
}
// NOT !
if(!(5 < 2)){ //false -> true (inverte o booleano)
    echo "true <br>";
} else{
    echo "false <br>";
}