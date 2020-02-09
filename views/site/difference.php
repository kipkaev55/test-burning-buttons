<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */

$this->title = 'Difference in time';
?>
<div class="site-index">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <?php $form = ActiveForm::begin(); ?>
                <?= $form->field($model, 'firstValue')->widget(DatePicker::className(), [
                    'type' => DatePicker::TYPE_INPUT,
                    'options' => ['placeholder' => 'Select issue date ...'],
                    'convertFormat' => true,
                    'pluginOptions' => [
                        'format' => 'dd-MM-yyyy',
                        'todayHighlight' => true,
                        'autoclose' => true,
                        'weekStart' => 1,
                    ]
                ]); ?>
                <?= $form->field($model, 'secondValue')->widget(DatePicker::className(), [
                    'type' => DatePicker::TYPE_INPUT,
                    'options' => ['placeholder' => 'Select issue date ...'],
                    'convertFormat' => true,
                    'pluginOptions' => [
                        'format' => 'dd-MM-yyyy',
                        'todayHighlight' => true,
                        'autoclose' => true,
                        'weekStart' => 1,
                    ]
                ]); ?>
                <div class="form-group">
                    <div class="col-lg-12">
                        <?= Html::submitButton('Get difference', ['class' => 'btn btn-primary pull-right']) ?>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
            <div class="col-sm-6">
                <?php if (isset($days)) : ?>
                    Between <?= $model->firstValue?> and <?= $model->secondValue?> <?= \Yii::t('app', '{n,plural,=0{are no days} =1{is one day} other{are # days}}', ['n' => $days]) ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>