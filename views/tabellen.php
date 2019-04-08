<div class="container">
    <div class="row">
        <div class="nine columns">
            <h4>Tabellen</h4>
            <p>Wählen Sie lorem ipsum</p>
        </div>
    </div>
    <div class="row">
        <div class="nine columns">
            <form method="POST">
                <select name="tabelle">
                    <?php foreach ($rows as $row) {?>
                        <option value="<?php echo $row[0]?>"><?php echo $row[0]?></option>
                    <?php }?>
                </select>
                <input type="hidden" name="datenbank" value="<?php echo $datenbank ?>">
                <input class="button-primary" name="showcol" type="submit" value="Tabelle wählen">
                <form action="?seite=start">
                    <input class="button-primary" type="submit" value="Startseite" />
                </form>
            </form>
        </div>
    </div>
</div>
<?php
