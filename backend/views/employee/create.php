<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Employee $model */

$this->title = 'Create Employee';
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'airports' => $airports,
        'roles' => $roles,
    ]) ?>

</div>
