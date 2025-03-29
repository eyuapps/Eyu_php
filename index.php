<?php
echo 'my name is eyob <br>';
echo 'my id is 1501118 <br><br><br><br> <hr>';

$fname = 'Eyob';
$lname = 'Tesfaye';
$LikeFootBall = false;
$pi = 3.14;
$number = array(1,4,5,8,1);

echo $fname.' '.$lname.'<br><br>';


if($LikeFootBall == true){
    echo $fname.' Likes Football <br><br>';
}
else{
    echo $fname.' Does not Likes Football <br><br>';
}

echo 'the value of pi is = '.$pi.'<br><br>';

//unset($fname);


//echo $fname.' '.$lname.'<br><br>';

echo gettype($fname);

echo '<br><br>';

print_r ($number);

echo '<br><br>';

function MyNameAndAge($name,$age){

    echo 'My name is '.$name.' and my age is '.$age.'<br><br>';
}

MyNameAndAge('Eyob' , 21);


//the exercise
echo 'EXERCISE <br><br>';

function CheckString($str)
{

    echo 'the length of the text is '.strlen($str).'<br><br>';

    if(str_contains($str , 'IT')){
        echo 'yes the word  IT is found <br><br>';
    }
    else{
        echo 'not found <br><br>';
    }

    echo str_word_count($str).' words <br><br>';

    echo 'REVERSED :- '.strrev($str).'<br><br>';

    echo str_replace("IT","Information Technology","My Department is IT");
}

CheckString('My Department is IT');




echo '<hr> <hr> <hr>';
echo 'from handouts...<br><br> ';


//if elseif statement
$age = 23;

if($age > 17){
    echo 'you can vote <br><br>';
}
else if ($age == 17 ){

    echo 'you can vote after one year <br><br>';
    
}
else{
    echo 'you are under age  <br><br>';
}


//switch

$favmusic = 'mezmur';

switch($favmusic){

    case 'mezmur':
        echo 'your favorite music is mezmur   <br><br> ';
        break;
    case 'mezmur':
        echo 'your favorite music is jazz   <br><br> ';
        break;
    case 'mezmur':
        echo 'your favorite music is hiphop   <br><br> ';
        break;
    default:
        echo 'Yor favorite music is neither mezmur nor jazz , hiphop  <br><br>';

    }

//while loop

$x = 0;
while($x <= 10 ){
    echo 'the number is: '.$x.'<br>';
    $x++;
}

//for loop

for($y=0; $y <= 5; $y++){
    echo 'the number is very '.$y.'<br><br>';
}
?>
