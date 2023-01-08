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

<form class="whole-form" action="deleteVideo.php" method="POST">
<select class="dropdown-menu" name="ids">

<?php

$sql_command = "SELECT name, viid, description, link FROM videos";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $name = $id_rows['name'];
        $viid = $id_rows['viid'];
        $description = $id_rows['description'];
        $link = $id_rows['link'];
       
        echo "<option value=$viid>". $name .  "</option>";
    }

?>

</select>
<button class="delete-btn">DELETE</button>
</form>