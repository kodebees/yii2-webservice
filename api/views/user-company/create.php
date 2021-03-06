<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\v1\models\UserCompany */

$this->title = 'Create User Company';
$this->params['breadcrumbs'][] = ['label' => 'User Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-company-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
