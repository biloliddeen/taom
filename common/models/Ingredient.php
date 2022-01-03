<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ingredient".
 *
 * @property int $id
 * @property string $name
 * @property int|null $status
 *
 * @property Food[] $foods
 * @property Food[] $foods0
 * @property Food[] $foods1
 * @property Food[] $foods2
 * @property Food[] $foods3
 */
class Ingredient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ingredient';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 70],
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
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Foods]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFoods()
    {
        return $this->hasMany(Food::className(), ['ingredient_id1' => 'id']);
    }

    /**
     * Gets query for [[Foods0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFoods0()
    {
        return $this->hasMany(Food::className(), ['ingredient_id2' => 'id']);
    }

    /**
     * Gets query for [[Foods1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFoods1()
    {
        return $this->hasMany(Food::className(), ['ingredient_id3' => 'id']);
    }

    /**
     * Gets query for [[Foods2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFoods2()
    {
        return $this->hasMany(Food::className(), ['ingredient_id4' => 'id']);
    }

    /**
     * Gets query for [[Foods3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFoods3()
    {
        return $this->hasMany(Food::className(), ['ingredient_id5' => 'id']);
    }
}
