<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%food}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%ingredient}}`
 * - `{{%ingredient}}`
 * - `{{%ingredient}}`
 * - `{{%ingredient}}`
 * - `{{%ingredient}}`
 */
class m220103_142057_create_food_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%food}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(70)->notNull(),
            'ingredient_id1' => $this->integer(),
            'ingredient_id2' => $this->integer(),
            'ingredient_id3' => $this->integer(),
            'ingredient_id4' => $this->integer(),
            'ingredient_id5' => $this->integer(),
        ]);

        // creates index for column `ingredient_id1`
        $this->createIndex(
            '{{%idx-food-ingredient_id1}}',
            '{{%food}}',
            'ingredient_id1'
        );

        // add foreign key for table `{{%ingredient}}`
        $this->addForeignKey(
            '{{%fk-food-ingredient_id1}}',
            '{{%food}}',
            'ingredient_id1',
            '{{%ingredient}}',
            'id',
            'CASCADE'
        );

        // creates index for column `ingredient_id2`
        $this->createIndex(
            '{{%idx-food-ingredient_id2}}',
            '{{%food}}',
            'ingredient_id2'
        );

        // add foreign key for table `{{%ingredient}}`
        $this->addForeignKey(
            '{{%fk-food-ingredient_id2}}',
            '{{%food}}',
            'ingredient_id2',
            '{{%ingredient}}',
            'id',
            'CASCADE'
        );

        // creates index for column `ingredient_id3`
        $this->createIndex(
            '{{%idx-food-ingredient_id3}}',
            '{{%food}}',
            'ingredient_id3'
        );

        // add foreign key for table `{{%ingredient}}`
        $this->addForeignKey(
            '{{%fk-food-ingredient_id3}}',
            '{{%food}}',
            'ingredient_id3',
            '{{%ingredient}}',
            'id',
            'CASCADE'
        );

        // creates index for column `ingredient_id4`
        $this->createIndex(
            '{{%idx-food-ingredient_id4}}',
            '{{%food}}',
            'ingredient_id4'
        );

        // add foreign key for table `{{%ingredient}}`
        $this->addForeignKey(
            '{{%fk-food-ingredient_id4}}',
            '{{%food}}',
            'ingredient_id4',
            '{{%ingredient}}',
            'id',
            'CASCADE'
        );

        // creates index for column `ingredient_id5`
        $this->createIndex(
            '{{%idx-food-ingredient_id5}}',
            '{{%food}}',
            'ingredient_id5'
        );

        // add foreign key for table `{{%ingredient}}`
        $this->addForeignKey(
            '{{%fk-food-ingredient_id5}}',
            '{{%food}}',
            'ingredient_id5',
            '{{%ingredient}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%ingredient}}`
        $this->dropForeignKey(
            '{{%fk-food-ingredient_id1}}',
            '{{%food}}'
        );

        // drops index for column `ingredient_id1`
        $this->dropIndex(
            '{{%idx-food-ingredient_id1}}',
            '{{%food}}'
        );

        // drops foreign key for table `{{%ingredient}}`
        $this->dropForeignKey(
            '{{%fk-food-ingredient_id2}}',
            '{{%food}}'
        );

        // drops index for column `ingredient_id2`
        $this->dropIndex(
            '{{%idx-food-ingredient_id2}}',
            '{{%food}}'
        );

        // drops foreign key for table `{{%ingredient}}`
        $this->dropForeignKey(
            '{{%fk-food-ingredient_id3}}',
            '{{%food}}'
        );

        // drops index for column `ingredient_id3`
        $this->dropIndex(
            '{{%idx-food-ingredient_id3}}',
            '{{%food}}'
        );

        // drops foreign key for table `{{%ingredient}}`
        $this->dropForeignKey(
            '{{%fk-food-ingredient_id4}}',
            '{{%food}}'
        );

        // drops index for column `ingredient_id4`
        $this->dropIndex(
            '{{%idx-food-ingredient_id4}}',
            '{{%food}}'
        );

        // drops foreign key for table `{{%ingredient}}`
        $this->dropForeignKey(
            '{{%fk-food-ingredient_id5}}',
            '{{%food}}'
        );

        // drops index for column `ingredient_id5`
        $this->dropIndex(
            '{{%idx-food-ingredient_id5}}',
            '{{%food}}'
        );

        $this->dropTable('{{%food}}');
    }
}
