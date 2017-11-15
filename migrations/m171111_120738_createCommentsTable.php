<?php

use yii\db\Migration;

class m171111_120738_createCommentsTable extends Migration
{
    public function up()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'body' => $this->text()->notNull(),
            'created' => $this->timestamp()->defaultExpression('current_timestamp'),
            'post_id' => $this->integer()->notNull(),
            'tree' => $this->integer()->notNull(),
            'lft' => $this->integer()->notNull(),
            'rgt' => $this->integer()->notNull(),
            'depth' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('comments');
    }
}
