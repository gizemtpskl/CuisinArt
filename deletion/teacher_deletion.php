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

<form class="whole-form" action="deleteTeacher.php" method="POST">
<select class="dropdown-menu" name="ids">

<?php

$sql_command = "SELECT tid, name, email, mobile, profession FROM teachers";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $name = $id_rows['name'];
        $tid = $id_rows['tid'];
        $email = $id_rows['email'];
        $mobile = $id_rows['mobile'];
        $profession = $id_rows['profession'];
        
       
        echo "<option value=$tid>". $name .  "</option>";
    }

?>

</select>
<button class="delete-btn">DELETE</button>
</form>