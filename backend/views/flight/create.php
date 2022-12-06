<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Flight $model */

$this->title = 'Create Flight';
$this->params['breadcrumbs'][] = ['label' => 'Flights', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flight-create">
    <?= $this->render('_form', [
        'model' => $model,
        'airports' => $airports,
        'airplanes' => $airplanes,
    ]) ?>

</div>
