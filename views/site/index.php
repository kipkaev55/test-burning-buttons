<?php

use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Тестовое задание</h1>

        <p class="lead">на должность PHP Developer в компанию Burning Buttons</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Part 1</h2>

                <p>используя datetime написать небольшой сервис, который будет форматировать дату по разным стандартам (rus/usa/international)</p>

                <p><a class="btn btn-default" href="<?= Url::toRoute(['/site/formatter'])?>">Open</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Part 2</h2>

                <p>вычислять разницу между двумя датами (на входе две строки - дата в формате ISO на выходе n - число дней между датами)</p>

                <p><a class="btn btn-default" href="<?= Url::toRoute(['/site/difference'])?>">Open</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Part 3</h2>

                <p>проверять попадает ли дата в промежуток меджу днями недели (на входе три строки - дата в формате ISO, начало и конец периода [mon-sun], на выходе true/false).</p>

                <p><a class="btn btn-default" href="<?= Url::toRoute(['/site/period'])?>">Open</a></p>
            </div>
        </div>

    </div>
</div>
