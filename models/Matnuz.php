<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matnuz".
 *
 * @property int $id
 * @property string|null $rasm rasm
 * @property string|null $sarlavha
 * @property resource|null $matn
 * @property string|null $izoh
 * @property int|null $kurish kurish
 * @property string|null $star
 * @property string|null $layk
 * @property string|null $dislayk
 * @property string|null $insert insert
 * @property string|null $update update
 */
class Matnuz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matnuz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['matn', 'izoh'], 'string'],
            ['kurish', 'integer'],
            ['kurish', 'default', 'value' => 0],
            [['insert', 'update'], 'safe'],
            [['rasm', 'sarlavha', 'star', 'layk', 'dislayk'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rasm' => 'Rasm',
            'matn' => 'Matn',
            'izoh' => 'Izoh',
            'sarlavha' => 'Nomi',
            'kurish' => "Ko'rishlar soni",
            'star' => 'Star',
            'layk' => 'Layk',
            'dislayk' => 'Dislayk',
            'insert' => 'Yaratilgan vaqti',
            'update' => 'Yangilangan vaqti'
        ];
    }
    public function getRasm()
    {
        return $this->rasm;
    }
}
