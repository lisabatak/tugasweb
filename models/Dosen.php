<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dosen".
 *
 * @property int $id
 * @property string|null $nama
 * @property int|null $nip
 *
 * @property Absensi[] $absensis
 * @property PermohonanCuti[] $permohonanCutis
 */
class Dosen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dosen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip'], 'integer'],
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'nip' => 'Nip',
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
