
<?php foreach(signe() as $k => $v  ):  ?>  
<form method="POST" action="!index.php?action=modifier">
    <label for="signe"> <?= $k ?> </label>
    <input type="text" placeholder="<?= $v?>">  </input><br/>
   <?php endforeach ?>
   <input type="submit" value="OK" />
</form>
    