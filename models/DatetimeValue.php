<?php

namespace app\models;

/**
 * DatetimeValue is the model for formating in three states.
 */
class DatetimeValue extends DatetimeBase
{
    const FORMAT_RUS = 'd.m.Y';
    const FORMAT_USA = 'm-d-Y';
    const FORMAT_INTERNATIONAL = 'd-m-Y';

    public $value;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['value'], 'required'],
            [['value'], 'validateDatetime'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'value' => 'Input datetime',
        ];
    }

    private function asRussian()
    {
        $dt = new \DateTime();
        $dt->setTimestamp(strtotime($this->value));
        return $dt->format(static::FORMAT_RUS);
    }

    private function asUSA()
    {
        $dt = new \DateTime();
        $dt->setTimestamp(strtotime($this->value));
        return $dt->format(static::FORMAT_USA);
    }

    private function asInternational()
    {
        $dt = new \DateTime();
        $dt->setTimestamp(strtotime($this->value));
        return $dt->format(static::FORMAT_INTERNATIONAL);
    }

    public function getDatetimeFormats()
    {
        if ($this->value !== null && $this->validate()) {
            return array(
                'rus' => $this->asRussian(),
                'usa' => $this->asUSA(),
                'international' => $this->asInternational(),
            );
        }
        return null;
    }
}
