<?php
//free code camp
//https://www.youtube.com/watch?v=OK_JCtrrv-c&t=304s
//PHP Programming Language Tutorial - Full Course

echo '<h1 style="text-align:center ; color:DarkGoldenRod">if statements</h1>' ;


$isMale=false ;



if($isMale){

      echo '<h3 style="color:cornflowerblue ; text-align:center"> you are male </h3>' ;

}else{
      echo '<h3 style="color:tomato ; text-align:center"> you are female </h3>' ;
}


$isTall=false ;

//check two conditions


if($isMale && $isTall){

    echo '<h3 style="color:cornflowerblue ; text-align:center"> you are a tall male </h3>' ;

}elseif($isMale && !$isTall){

    echo '<h3 style="color:cornflowerblue ; text-align:center"> you are a short male </h3>' ;

}elseif(!$isMale && $isTall){
    echo '<h3 style="color:tomato ; text-align:center"> you are a tall female </h3>' ;
}else{

    echo '<h3 style="color:tomato ; text-align:center"> you are female and not tall </h3>' ;
    
}


//tutorial


if($isMale && $isTall){
    echo "you are a tall male" ;
}elseif($isMale && !$isTall){
    echo "you are a short male" ;
}elseif(!$isMale && $isTall){
    echo "you are not male but are tall" ;
}else{
    echo "you are not male and no tall" ;
}





if($isMale || $isTall){

    echo '<h3 style="color:cornflowerblue ; text-align:center"> you are a person </h3>' ;

}else{
    echo '<h3 style="color:tomato ; text-align:center"> you are not male </h3>' ;
}




?>