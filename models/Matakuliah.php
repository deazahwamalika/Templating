<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matakuliah".
 *
 * @property int $Id
 * @property string $kode_mk
 * @property string $nama_mk
 */
class Matakuliah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matakuliah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_matakuliah', 'nama_matakuliah'], 'required'],
            [['kode_matakuliah'], 'string', 'max' => 10],
            [['nama_matakuliah'], 'string', 'max' => 100],
            [['kode_matakuliah'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'kode_matakuliah' => 'Kode Matakuliah',
            'nama_matakuliah' => 'Nama Matakuliah',
        ];
    }
}
