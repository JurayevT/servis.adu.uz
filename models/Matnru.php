<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matnru".
 *
 * @property int $id
 * @property string|null $rasm rasm
 * @property string|null $sarlavha
 * @property resource|null $matn
 * @property int|null $kurish kurish
 * @property string|null $insert insert
 * @property string|null $update update
 * @property string|null $star
 * @property string|null $layk
 * @property string|null $dislayk
 * @property string|null $izoh
 */
class Matnru extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matnru';
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
            'rasm' => 'rasm',
            'matn' => 'Matn',
            'sarlavha' => 'Nomi',
            'kurish' => "Ko'rishlar soni",
            'insert' => 'Yaratilgan vaqti',
            'update' => 'Yangilangan vaqti',
            'star' => 'Star',
            'layk' => 'Layk',
            'dislayk' => 'Dislayk',
            'izoh' => 'Izoh',
        ];
    }
    public function getRasm()
    {
        return $this->rasm;
    }
}
