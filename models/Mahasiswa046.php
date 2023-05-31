<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa046".
 *
 * @property int $id046
 * @property string $nim046
 * @property string $nama046
 * @property string $kelas046
 * @property string $status046
 */
class Mahasiswa046 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa046';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim046', 'nama046', 'kelas046', 'status046'], 'required'],
            [['nim046', 'nama046', 'kelas046', 'status046'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id046' => 'Id046',
            'nim046' => 'Nim046',
            'nama046' => 'Nama046',
            'kelas046' => 'Kelas046',
            'status046' => 'Status046',
        ];
    }
}
