<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mhs046}}`.
 */
class m230530_110647_create_mhs046_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mhs046}}', [
            'id' => $this->primaryKey(),
            'no_induk_mahasiswa' => $this->string()->notNull(),
            'nama_mahasiswa' => $this->string()->notNull(),
            'kelas' => $this->string()->notNull(),
            'status' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mhs046}}');
    }
}
