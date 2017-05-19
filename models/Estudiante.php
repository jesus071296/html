<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estudiante".
 *
 * @property integer $id
 * @property string $alumnos
 * @property integer $situacion
 *
 * @property Situacion $situacion0
 */
class Estudiante extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estudiante';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alumnos'], 'required'],
            [['alumnos'], 'string'],
            [['situacion'], 'integer'],
            [['situacion'], 'exist', 'skipOnError' => true, 'targetClass' => Situacion::className(), 'targetAttribute' => ['situacion' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'alumnos' => Yii::t('app', 'Alumnos'),
            'situacion' => Yii::t('app', 'Situacion'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSituacion0()
    {
        return $this->hasOne(Situacion::className(), ['id' => 'situacion']);
    }
}
