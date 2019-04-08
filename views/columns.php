<div class="container">
    <div class="row">
        <div class="nine columns">
            <h4>Attribute</h4>
            <p>lorem ipsum</p>
        </div>
    </div>
    <div class="row">
        <div class="nine columns">
            <form method="POST">
                    <?php foreach ($rows as $row) {?>
                        <p><?php echo $row[0]?></p>
                    <?php }?>
            </form>
        </div>
    </div>
</div>
<?php
