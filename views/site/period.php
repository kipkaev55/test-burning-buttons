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
                <?= $form->field($model, 'value')->widget(DatePicker::className(), [
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
                <?= $form->field($model, 'start')->dropDownList($model->daysOfWeek) ?>
                <?= $form->field($model, 'end')->dropDownList($model->daysOfWeek) ?>
                <div class="form-group">
                    <div class="col-lg-12">
                        <?= Html::submitButton('Check period', ['class' => 'btn btn-primary pull-right']) ?>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
            <div class="col-sm-6">
                <?php if (isset($result)) : ?>
                    <?= $result ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>