<?php
use yii\helpers\Html;
?>

<p>Information about you:</p>

<ul>
    <li><label>Login</label>: <?= Html::encode($model->login) ?></li>
    <li><label for="email">Email:</label><?= Html::encode($model->email) ?></li>
</ul>
