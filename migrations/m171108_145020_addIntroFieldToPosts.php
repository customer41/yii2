<?php

use yii\db\Migration;

class m171108_145020_addIntroFieldToPosts extends Migration
{
    public function up()
    {
        $this->addColumn('posts', 'intro', $this->text()->notNull());
    }

    public function down()
    {
        $this->dropColumn('posts', 'intro');
    }
}
