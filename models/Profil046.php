<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil_046".
 *
 * @property int $Id
 * @property string $Id_mahasiswa
 * @property string $Foto_profil
 */
class Profil046 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_046';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_mahasiswa', 'Foto_profil'], 'required'],
            [['Id_mahasiswa', 'Foto_profil'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Id_mahasiswa' => 'No. Induk Mahasiswa',
            'Foto_profil' => 'Foto Profil',
        ];
    }
}
