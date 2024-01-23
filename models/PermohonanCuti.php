<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "permohonan_cuti".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $tanggal_mulai
 * @property string|null $tanggal_selesai
 * @property string|null $alasan
 * @property string|null $status
 *
 * @property Dosen $user
 * @property Mahasiswa $user0
 */
class PermohonanCuti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'permohonan_cuti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['tanggal_mulai', 'tanggal_selesai'], 'safe'],
            [['alasan'], 'string'],
            [['status'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Dosen::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'tanggal_mulai' => 'Tanggal Mulai',
            'tanggal_selesai' => 'Tanggal Selesai',
            'alasan' => 'Alasan',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Dosen::className(), ['id' => 'user_id']);
    }

    /**
     * Gets query for [[User0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser0()
    {
        return $this->hasOne(Mahasiswa::className(), ['id' => 'user_id']);
    }
}
