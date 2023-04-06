<?php
$number = 2;
echo '1,';
echo '2,';
echo '3,';
echo '5,';
echo '7,';
while($number != 97)
{
    if(($number % 2) == 0 || ($number % 3) == 0 || ($number % 5) == 0 || ($number % 7) == 0)
    {
        $number++;
    }
    else
    {
        echo $number.',';
        $number++;
    }
}
echo '97';
echo "<br>";
echo '1,';
echo '2,';
echo '3,';
echo '5,';
echo '7,';
for($i = 2;$i < 97;$i++)
{
    if(($i % 2) == 0 || ($i % 3) == 0 || ($i % 5) == 0 || ($i % 7) == 0)
    {
    }
    else
    {
        echo $i.',';
    }
}
echo '97';
echo "<br>";
$n = rand(1, 4);
if($n == 1)
{
    echo "Hello! Good morning I am your host today";
}
elseif($n == 2)
{
    echo "Sawadeekha, how are your doing today";
}
elseif($n == 3)
{
    echo "Namaste! How can I help you?";
}
elseif($n == 4)
{
    echo "Hola! Would you like to join us";
}
?>
