<?php

namespace app\models;

/**
 * DatetimeBase is the base model for other models.
 */
class DatetimeBase extends \yii\base\Model
{
    public function validateDatetime($attribute, $params, $validator)
    {
        if (strtotime($this->$attribute) === false) {
            $this->addError($attribute, 'Incorrect datetime');
        }
    }
}
