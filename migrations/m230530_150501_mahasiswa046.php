<?php

use yii\db\Migration;

/**
 * Class m230530_150501_mahasiswa046
 */
class m230530_150501_mahasiswa046 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{mahasiswa046}}', [
            'id046' => $this->primaryKey(),
            'nim046' => $this->string(255)->notNull(),
            'nama046' => $this->string(255)->notNull(),
            'kelas046' => $this->string(255)->notNull(),
            'status046' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230530_150501_mahasiswa046 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230530_150501_mahasiswa046 cannot be reverted.\n";

        return false;
    }
    */
}
