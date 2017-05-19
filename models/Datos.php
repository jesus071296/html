<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datos".
 *
 * @property integer $id
 * @property string $carrera
 * @property string $grupo
 * @property integer $estado_civil
 *
 * @property Civil $estadoCivil
 */
class Datos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'datos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['carrera', 'grupo'], 'required'],
            [['carrera', 'grupo'], 'string'],
            [['estado_civil'], 'integer'],
            [['estado_civil'], 'exist', 'skipOnError' => true, 'targetClass' => Civil::className(), 'targetAttribute' => ['estado_civil' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'carrera' => Yii::t('app', 'Carrera'),
            'grupo' => Yii::t('app', 'Grupo'),
            'estado_civil' => Yii::t('app', 'Estado Civil'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstadoCivil()
    {
        return $this->hasOne(Civil::className(), ['id' => 'estado_civil']);
    }
}
