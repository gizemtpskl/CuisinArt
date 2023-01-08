<?php 

include "../config1.php";

?>
<style>
    .whole-form{
        margin: auto;
        margin-top: 5%;
        padding: 5%;
        width: 80%;
        background-color: #ded0ff;
        border-radius: 5px;
        box-sizing: border-box;
        border: 2px solid rgba(0, 0, 0, 0.183);
    }
    .dropdown-menu{
        width: 40%;
    }
    .delete-btn{
        font-weight: bolder;
        width: 10%;
        background-color: #9919d0;
        color: white;
        padding: 14px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<form class="whole-form" action="deleteConducts.php" method="POST">
    <h3>Workshop ID:</h3>
<select class="dropdown-menu" name="wid">

<?php

$sql_command = "SELECT  wid FROM conducts";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $wid = $id_rows['wid'];
     
        
        
       
        echo "<option value=$wid>". $wid .  "</option>";
    }

?>

</select>
<h3>Teacher ID:</h3>
<select class="dropdown-menu" name="tid">

<?php

$sql_command = "SELECT tid FROM conducts";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        
        $tid = $id_rows['tid'];
        
        
       
        echo "<option value=$tid>". $tid .  "</option>";
    }

?>

</select>
<button class="delete-btn">DELETE</button>
</form>