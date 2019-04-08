<div class="container">
    <div class="row">
        <div class="nine columns">
            <h4>Datenbank</h4>
            <p>Wählen Sie lorem ipsum</p>
        </div>
    </div>
    <div class="row">
        <div class="nine columns">
            <form method="POST">
                <select name="datenbank">
                    <?php foreach ($rows as $row) {?>
                        <option value="<?php echo $row[0]?>"><?php echo $row[0]?></option>
                    <?php }?>
                </select>
                <input class="button-primary" name="showtab" type="submit" value="Datenbank wählen">
            </form>
        </div>
    </div>
</div>
<?php