<?php

use yii\db\Migration;

class m171105_132032_addCreatedFieldToPosts extends Migration
{
    public function up()
    {
        $this->addColumn('posts', 'created', $this->timestamp()->defaultExpression('current_timestamp'));
    }

    public function down()
    {
        $this->dropColumn('posts', 'created');
    }
}
