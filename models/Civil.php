<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "civil".
 *
 * @property integer $id
 * @property string $situacion_civil
 *
 * @property Datos[] $datos
 */
class Civil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'civil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['situacion_civil'], 'required'],
            [['situacion_civil'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'situacion_civil' => Yii::t('app', 'Situacion Civil'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatos()
    {
        return $this->hasMany(Datos::className(), ['estado_civil' => 'id']);
    }
}
