<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'Datetime formatter';
?>
<div class="site-index">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <?php $form = ActiveForm::begin(); ?>
                <?= $form->field($model, 'value')->textInput(); ?>
                <div class="form-group">
                    <div class="col-lg-12">
                        <?= Html::submitButton('Formatting', ['class' => 'btn btn-primary pull-right']) ?>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
            <div class="col-sm-6">
                <?php if (isset($formats)) : ?>
                    <ul class="list-group">
                        <?php if (isset($formats['rus'])) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $formats['rus'] ?>
                                <span class="badge badge-primary badge-pill">rus</span>
                            </li>
                        <?php endif; ?>
                        <?php if (isset($formats['usa'])) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $formats['usa'] ?>
                                <span class="badge badge-primary badge-pill">usa</span>
                            </li>
                        <?php endif; ?>
                        <?php if (isset($formats['international'])) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $formats['international'] ?>
                                <span class="badge badge-primary badge-pill">international</span>
                            </li>
                        <?php endif; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>