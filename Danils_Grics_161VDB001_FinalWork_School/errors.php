<?php
/**
 * Created by PhpStorm.
 * User: BestUser
 * Date: 12.12.2018
 * Time: 0:49
 */

if (count($errors) > 0) : ?>
    <div class="error">
        <?php foreach ($errors as $error) : ?>
            <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>