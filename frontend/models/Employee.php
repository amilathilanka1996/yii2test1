<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property string $employee_name
 * @property string $employee_address
 * @property string $employee_email
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employee_name', 'employee_address', 'employee_email'], 'required'],
            [['employee_name', 'employee_address', 'employee_email'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'employee_name' => 'Employee Name',
            'employee_address' => 'Employee Address',
            'employee_email' => 'Employee Email',
        ];
    }
}
