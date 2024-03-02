<?php 
$physics =$_GET['physics'];
$math =$_GET['math'];
$bangla =$_GET['bangla'];
$average = ($physics+$math+$bangla)/3;

if( $average>=90)
{
    echo'A+';
}
else if($average<89 && $average>= 80)
{
    echo 'A';
}
else if($average<79 && $average>=70)
{
    echo 'B';
}
else if($average<69 && $average>=50)
{
    echo 'C';
}
else if($average<59 && $average>= 40)
{
    echo 'D';
}
else
{
    echo 'F';
}



