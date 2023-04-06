<form name="input" method="post">
    Enter the value: <input type="text" name="user">
    <button type="submit">Enter</button>
</form>
<?php
    if(isset($_POST['user'])){
        $input = $_POST['user'];
        if(!is_numeric($input)){
            echo "The value is not numeric!";
        }
        else if($input < 0){
            echo "The value is negative!";
        }
        else if($input > 0){
            echo "The value is positive!";
        }
        else if($input == 0){
            echo "The value is zero!";
        }
    }
?>