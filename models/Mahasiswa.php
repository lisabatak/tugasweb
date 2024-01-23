<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id
 * @property int|null $nim
 * @property string|null $nama
 * @property string|null $prodi
 * @property int|null $semester
 *
 * @property Absensi[] $absensis
 * @property PermohonanCuti[] $permohonanCutis
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'semester'], 'integer'],
            [['nama', 'prodi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'prodi' => 'Prodi',
            'semester' => 'Semester',
        ];
    }

    /**
     * Gets query for [[Absensis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAbsensis()
    {
        return $this->hasMany(Absensi::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[PermohonanCutis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermohonanCutis()
    {
        return $this->hasMany(PermohonanCuti::className(), ['user_id' => 'id']);
    }
}
