<?php 

include "../config1.php";

?>
<style>
    .whole-form{
        margin: auto;
        margin-top: 5%;
        padding: 5%;
        eidth: 80%;
        background-color: #ded0ff;
        border-radius: 5px;
        box-sizing: border-box;
        border: 2px solid rgba(0, 0, 0, 0.183);
    }
    .dropdown-menu{
        eidth: 40%;
    }
    .delete-btn{
        font-weight: bolder;
        eidth: 10%;
        background-color: #9919d0;
        color: white;
        padding: 14px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<form class="whole-form" action="deleteHas.php" method="POST">
    <h3>Event ID:</h3>
<select class="dropdown-menu" name="eid">

<?php

$sql_command = "SELECT  eid FROM has";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $eid = $id_rows['eid'];
     
        
        
       
        echo "<option value=$eid>". $eid .  "</option>";
    }

?>

</select>
<h3>Food Type ID:</h3>
<select class="dropdown-menu" name="fid">

<?php

$sql_command = "SELECT fid FROM has";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        
        $fid = $id_rows['fid'];
        
        
       
        echo "<option value=$fid>". $fid .  "</option>";
    }

?>

</select>
<button class="delete-btn">DELETE</button>
</form>