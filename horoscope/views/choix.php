<html>
    <form method="POST" action="!index.php?action=reponse">
        <p>
            <label for="signe">Quel est votre signe astrologique ?</label><br />
                <select name="signe" id="signe">
                    <?php foreach($signe as $k => $v  ):  ?>             
                    <option value="<?= $k ?>"> <?= $k ?> </option>
                   <?php endforeach ?>
                    </select>
        <input type="submit" value="Envoyer" />    
    </form> </br>
    <a href="views/admin.php"> Administrer </a>
</html>