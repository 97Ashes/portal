<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "scheduler".
 *
 * @property int $id
 * @property string $postdate
 * @property string $enddate
 * @property string $sendername
 */
class Scheduler extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'scheduler';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['postdate', 'enddate'], 'safe'],
            [['sendername'], 'required'],
            [['sendername'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'postdate' => 'Postdate',
            'enddate' => 'Enddate',
            'sendername' => 'Sendername',
        ];
    }
}
