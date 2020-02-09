<?php

namespace app\models;

/**
 * DatetimeValue is the model for formating in three states.
 */
class DatetimeDifference extends DatetimeBase
{
    public $firstValue;
    public $secondValue;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['firstValue', 'secondValue'], 'required'],
            [['firstValue', 'secondValue'], 'validateDatetime'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'firstValue' => 'Input first datetime',
            'secondValue' => 'Input second datetime',
        ];
    }
}
