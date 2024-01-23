<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "absensi".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $nama_matkul
 * @property string|null $prodi
 * @property int|null $semester
 * @property int|null $sks
 * @property string|null $tanggal
 * @property string|null $jam_masuk
 * @property string|null $jam_keluar
 * @property string|null $status
 *
 * @property Dosen $user
 * @property Mahasiswa $user0
 */
class Absensi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'absensi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'semester', 'sks'], 'integer'],
            [['tanggal', 'jam_masuk', 'jam_keluar'], 'safe'],
            [['nama_matkul', 'prodi', 'status'], 'string', 'max' => 255],
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
            'nama_matkul' => 'Nama Matkul',
            'prodi' => 'Prodi',
            'semester' => 'Semester',
            'sks' => 'Sks',
            'tanggal' => 'Tanggal',
            'jam_masuk' => 'Jam Masuk',
            'jam_keluar' => 'Jam Keluar',
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
