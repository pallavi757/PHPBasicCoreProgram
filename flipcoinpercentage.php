<?php
$n=0;
$headCnt=0;
$tailCnt=0;
$heads;
$tails;
echo"Enter the no of times you want to flip the coin";
$n=readLine("Enter a number: ");
for($i=0;$i<$n;$i++)
{
    $num=rand(0,10)/10;
    if($num<0.5)
        $tailCnt++;
    else
        $headCnt++;  
}
$heads=$headCnt/$n*100;
$tails=$tailCnt/$n*100;
echo"\n $heads";
echo"\n $tails";
echo"percentage of head:". round($heads,2);
echo"\npercentage of tail: ". round($tails,2);
