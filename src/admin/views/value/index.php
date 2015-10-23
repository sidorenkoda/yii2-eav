<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel mirocow\eav\models\EavAttributeValueSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Eav Attribute Values';
$this->params['breadcrumbs'][] = ['label' => 'EAV', 'url' => ['/eav']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eav-attribute-value-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?//= Html::a('Create Eav Attribute Value', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'entityId',
            'attributeId',
            'value',
            'optionId',

            [
                'class' => 'yii\grid\ActionColumn',
                'options' => ['width' => '70px'],
                'template' => '{update} {delete}',
            ],
        ],
    ]); ?>

</div>
