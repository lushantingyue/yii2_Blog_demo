<?php
/**
 * Created by PhpStorm.
 * User: wjg
 * Date: 2017/11/3
 * Time: 10:42
 */

use yii\helpers\Html;

?>

<p> 表单提交成功确认. </p>
<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>