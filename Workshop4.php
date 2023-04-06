Please choose a month
<form id = "month" method = "post">
    <select name = "month">
    <option selected = "Selected">Choose month</option>
        <?php
            $Month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
            foreach($Month as $item)
            {
                echo "<option value= '$item'>$item</option>";
            }
        ?>
    </select>
    <input type="submit">
</form>    
<?php
    $Days = array('Jan' => '31', 'Feb' => '28', 'Mar'  => '31', 'Apr' => '30', 'May' => '31', 'June' => '30', 'July' => '31', 'Aug' => '31', 'Sept' => '30', 'Oct' => '31', 'Nov' => '30', 'Dec' => '31');
    if(isset($_POST['month']))
    {
        $select = $_POST['month'];
        echo "The month of $select has $Days[$select]";
    }
?>