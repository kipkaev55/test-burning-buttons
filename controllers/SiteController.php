<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\DatetimeValue;
use app\models\DatetimeDifference;
use app\models\DatetimePeriod;

class SiteController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionFormatter()
    {
        $model = new DatetimeValue();
        $formats = null;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $formats = $model->getDatetimeFormats();
        }
        return $this->render('formatter', compact('model', 'formats'));
    }

    public function actionDifference()
    {
        $model = new DatetimeDifference();
        $days = null;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $first = new \DateTime();
            $second = new \DateTime();
            $first->setTimestamp(strtotime($model->firstValue));
            $second->setTimestamp(strtotime($model->secondValue));
            $diff = $first->diff($second);
            $days = $diff->days;
        }
        return $this->render('difference', compact('model', 'days'));
    }

    public function actionPeriod()
    {
        $model = new DatetimePeriod();
        $result = null;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $daysOfWeek = $model->daysOfWeek;
            $start = date('N', strtotime($daysOfWeek[$model->start]));
            $end = date('N', strtotime($daysOfWeek[$model->end]));
            $value = date('N', strtotime($model->value));
            $result = sprintf('%s %s is between %s and %s', date('D', strtotime($model->value)), $model->value, date('D', strtotime($daysOfWeek[$model->start])), date('D', strtotime($daysOfWeek[$model->end])));
            $isBetween = false;
            if ($start < $end) {
                if ($start <= $value && $value <= $end) {
                    $isBetween = true;
                }
            } else {
                if ($end <= $value && $value <= $start) {
                    $isBetween = true;
                }
            }
            $result = sprintf('%s: %s', $result, ($isBetween ? 'true' : 'false'));
        }
        return $this->render('period', compact('model', 'result'));
    }
}
