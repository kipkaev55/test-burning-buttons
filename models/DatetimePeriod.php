<?php

namespace app\models;

/**
 * DatetimeValue is the model for formating in three states.
 */
class DatetimePeriod extends DatetimeBase
{
    public $value;
    public $start;
    public $end;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['value', 'start', 'end'], 'required'],
            [['value'], 'validateDatetime'],
            [['start', 'end'], 'validateDayOfWeek'],
        ];
    }

    public function validateDayOfWeek($attribute, $params, $validator)
    {
        if (in_array($this->$attribute, array_keys($this->daysOfWeek)) === false) {
            $this->addError($attribute, 'Incorrect day of week');
        }
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'value' => 'Input date',
        ];
    }

    public function getDaysOfWeek()
    {
        $days = array();
        for ($i = 1; $i <= 7; $i++) {
            $days[strtolower(date('D', strtotime("Sunday +{$i} days")))] = date('l', strtotime("Sunday +{$i} days"));
        }
        return $days;
    }
}
