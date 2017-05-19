<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $apellido_materno
 * @property string $apellido_paterno
 * @property integer $edad
 * @property string $genero
 * @property string $direccion
 * @property string $telefono
 * @property string $estado
 * @property string $ciudad
 * @property string $email
 * @property integer $clase_de_usuario
 *
 * @property Tipo $claseDeUsuario
 * @property Tipo $claseDeUsuario0
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido_materno', 'apellido_paterno', 'edad', 'genero', 'direccion', 'telefono', 'estado', 'ciudad', 'email'], 'required'],
            [['nombre', 'apellido_materno', 'apellido_paterno', 'genero', 'direccion', 'telefono', 'estado', 'ciudad', 'email'], 'string'],
            [['edad', 'clase_de_usuario'], 'integer'],
            [['clase_de_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Tipo::className(), 'targetAttribute' => ['clase_de_usuario' => 'id']],
            [['clase_de_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Tipo::className(), 'targetAttribute' => ['clase_de_usuario' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'apellido_materno' => Yii::t('app', 'Apellido Materno'),
            'apellido_paterno' => Yii::t('app', 'Apellido Paterno'),
            'edad' => Yii::t('app', 'Edad'),
            'genero' => Yii::t('app', 'Genero'),
            'direccion' => Yii::t('app', 'Direccion'),
            'telefono' => Yii::t('app', 'Telefono'),
            'estado' => Yii::t('app', 'Estado'),
            'ciudad' => Yii::t('app', 'Ciudad'),
            'email' => Yii::t('app', 'Email'),
            'clase_de_usuario' => Yii::t('app', 'Clase De Usuario'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClaseDeUsuario()
    {
        return $this->hasOne(Tipo::className(), ['id' => 'clase_de_usuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClaseDeUsuario0()
    {
        return $this->hasOne(Tipo::className(), ['id' => 'clase_de_usuario']);
    }
}
