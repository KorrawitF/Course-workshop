<form method="post">
    Enter the bill: <input type="text" name="input">
    <button type="submit">Enter</button>
</form>
<?php
    if(isset($_POST['input']))
    {
        $unit = $_POST['input'];
        if($unit <= 50)
        {
            $total = $unit * 3.5;
        }
        elseif($unit > 50 && $unit <= 150)
        {
            $total = (50 * 3.5) + (($unit - 50) * 4);
        }
        elseif($unit > 150 && $unit <= 250)
        {
            $total = (50 * 3.5) + (100 * 4) + (($unit - 150) * 5.2);
        }
        elseif($unit > 250)
        {
            $total = (50 * 3.5) + (100 * 4) + (100 * 5.2) + (($unit - 250) * 6.5);
        }
        echo "The total amout is $unit total $total Baht";
    }
?>