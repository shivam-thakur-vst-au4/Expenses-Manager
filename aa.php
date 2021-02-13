<!DOCTYPE html>
<html>
<body>
<?php
$items=array(
array("<b>Jan</b>",23433,22212,1211221),
array("<b>Feb</b>",12343,12111,61211),
array("<b>Mar</b>",78788,54454,5444543),
array("<b>Apr</b>",89887,534333,122333),
array("<b>May</b>",44333,223322,90099),
array("<b>June</b>",89888,233223,22222)
);
$sum=0;
echo"<b> Monthly Turnover for All P	roducts :-</b><br><br>";
for($i=0;$i<6;$i++)
{
for($j=1;$j<4;$j++)
{
$sum=$sum+$items[$i][$j];
}
$str=$items[$i][0];
echo"$str :- Rs. $sum <br>";
$sum=0;
}
echo"<br><br><b> Monthly Turnover for Individual Product :-</b><br><br>";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Mobile's Rs.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laptop's Rs.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TV's Rs.</b><br>";
for($i=0;$i<6;$i++)
{
$str=$items[$i][0];
echo"$str:-";
for($j=1;$j<4;$j++)
{
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	";
echo $items[$i][$j];
echo"&nbsp;&nbsp;&nbsp;";
}
echo"<br>";
}
?>
</body>
</html>