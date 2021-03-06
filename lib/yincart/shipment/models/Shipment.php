<?php

namespace yincart\shipment\models;

use Yii;

/**
 * This is the model class for table "{{%shipment}}".
 *
 * @property integer $shipment_id
 * @property integer $order_id
 * @property string $shipment_method
 * @property string $trace_no
 * @property integer $create_at
 * @property integer $status
 */
class Shipment extends \kiwi\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%shipment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'shipment_method', 'trace_no', 'create_at', 'status'], 'required'],
            [['order_id', 'create_at', 'status'], 'integer'],
            [['shipment_method', 'trace_no'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'shipment_id' => Yii::t('app', 'Shipment ID'),
            'order_id' => Yii::t('app', 'Order ID'),
            'shipment_method' => Yii::t('app', 'Shipment Method'),
            'trace_no' => Yii::t('app', 'Trace No'),
            'create_at' => Yii::t('app', 'Create At'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
