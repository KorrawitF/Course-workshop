<?php
    $given = " apples. are, good? for, you, or,   don't? you, like? apples, or. maybe. you, like, oranges, better. than. apples?";
    $Split = preg_split("/[.,?]/", $given);
    $count = 0;
    $Highest = 0;
    $temp;
    $Output;
    asort($Split);
    for($i = 0; $i < count($Split); $i++)
    {
        $count = 0;
        foreach($Split as $Sample)
        {
            if($Split[$i] == $Sample)
            {
                $count++;
            }
        }
        if($count > $Highest)
        {
            $Highest = $count;
            $temp = $Split[$i];
            $Output = $temp;
        }
        elseif($count == $Highest && $temp != $Split[$i])
        {
            $Output = "$temp, $Split[$i]";
        }
    }
    echo "The most frequently is $Output. There are $Highest words of them.";
?>