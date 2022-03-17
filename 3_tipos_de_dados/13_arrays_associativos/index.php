<?php

$cachorro = ['nome'=>'Lion', 'idade'=>4, 'cor'=>'Branca', 'castrado'=>true, 'sexo'=>'macho'];
echo "Olá! Meu nome é ", $cachorro['nome'];
echo "<br>";
if($cachorro['idade']<=1){
    echo "Tenho ", $cachorro['idade'], " aninho,";
} else{
    echo "Tenho ", $cachorro['idade'], " aninhos,";
}
echo "<br>";
echo "Minha cor é ", $cachorro['cor'];
echo "<br>";
if($cachorro['castrado']){
    if(strtoupper($cachorro['sexo'])=='MACHO'){
        echo "E eu sou castrado!";
    } else{
        echo "E eu sou castrada!";
    }
} else{
    if(strtoupper($cachorro['sexo'])=='MACHO'){
        echo "E eu NÃO sou castrado!";
    } else{
        echo "E eu NÃO sou castrada!";
    }
}
echo "<br>";
echo "<br>";
echo "<br>";

$cachorro = ['nome'=>'Mel', 'idade'=>1, 'cor'=>'Branca', 'castrado'=>false, 'sexo'=>'femea'];
echo "Olá! Meu nome é ", $cachorro['nome'];
echo "<br>";
if($cachorro['idade']<=1){
    echo "Tenho ", $cachorro['idade'], " aninho,";
} else{
    echo "Tenho ", $cachorro['idade'], " aninhos,";
}
echo "<br>";
echo "Minha cor é ", $cachorro['cor'];
echo "<br>";
if($cachorro['castrado']){
    if(strtoupper($cachorro['sexo'])=='MACHO'){
        echo "E eu sou castrado!";
    } else{
        echo "E eu sou castrada!";
    }
} else{
    if(strtoupper($cachorro['sexo'])=='MACHO'){
        echo "E eu NÃO sou castrado!";
    } else{
        echo "E eu NÃO sou castrada!";
    }
}
echo "<br>";
echo "<br>";
echo "<br>";


