<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model mirocow\eav\models\EavAttributeType */

$this->title = 'Create Eav Attribute Type';
$this->params['breadcrumbs'][] = ['label' => 'EAV', 'url' => ['/eav']];
$this->params['breadcrumbs'][] = ['label' => 'Eav Attribute Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eav-attribute-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
