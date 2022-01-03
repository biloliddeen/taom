<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "food".
 *
 * @property int $id
 * @property string $name
 * @property int|null $ingredient_id1
 * @property int|null $ingredient_id2
 * @property int|null $ingredient_id3
 * @property int|null $ingredient_id4
 * @property int|null $ingredient_id5
 *
 * @property Ingredient $ingredientId1
 * @property Ingredient $ingredientId2
 * @property Ingredient $ingredientId3
 * @property Ingredient $ingredientId4
 * @property Ingredient $ingredientId5
 */
class Food extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'food';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['ingredient_id1', 'ingredient_id2', 'ingredient_id3', 'ingredient_id4', 'ingredient_id5'], 'integer'],
            [['name'], 'string', 'max' => 70],
            [['ingredient_id1'], 'exist', 'skipOnError' => true, 'targetClass' => Ingredient::className(), 'targetAttribute' => ['ingredient_id1' => 'id']],
            [['ingredient_id2'], 'exist', 'skipOnError' => true, 'targetClass' => Ingredient::className(), 'targetAttribute' => ['ingredient_id2' => 'id']],
            [['ingredient_id3'], 'exist', 'skipOnError' => true, 'targetClass' => Ingredient::className(), 'targetAttribute' => ['ingredient_id3' => 'id']],
            [['ingredient_id4'], 'exist', 'skipOnError' => true, 'targetClass' => Ingredient::className(), 'targetAttribute' => ['ingredient_id4' => 'id']],
            [['ingredient_id5'], 'exist', 'skipOnError' => true, 'targetClass' => Ingredient::className(), 'targetAttribute' => ['ingredient_id5' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'ingredient_id1' => 'Ingredient Id1',
            'ingredient_id2' => 'Ingredient Id2',
            'ingredient_id3' => 'Ingredient Id3',
            'ingredient_id4' => 'Ingredient Id4',
            'ingredient_id5' => 'Ingredient Id5',
        ];
    }

    /**
     * Gets query for [[IngredientId1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIngredientId1()
    {
        return $this->hasOne(Ingredient::className(), ['id' => 'ingredient_id1']);
    }

    /**
     * Gets query for [[IngredientId2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIngredientId2()
    {
        return $this->hasOne(Ingredient::className(), ['id' => 'ingredient_id2']);
    }

    /**
     * Gets query for [[IngredientId3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIngredientId3()
    {
        return $this->hasOne(Ingredient::className(), ['id' => 'ingredient_id3']);
    }

    /**
     * Gets query for [[IngredientId4]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIngredientId4()
    {
        return $this->hasOne(Ingredient::className(), ['id' => 'ingredient_id4']);
    }

    /**
     * Gets query for [[IngredientId5]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIngredientId5()
    {
        return $this->hasOne(Ingredient::className(), ['id' => 'ingredient_id5']);
    }
}
