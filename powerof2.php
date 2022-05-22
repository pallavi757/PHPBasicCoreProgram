<?php
$num=readLine("Enter power of number:");
if($num>0 && $num<=31)
{
    $power=1;
    for($i=1;$i<=$num;$i++)
    {

        $power=$power*2;
    }
    //$power=pow(2,$num);
    echo $power;
}
else
{
    echo "overflow";
}
