<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property integer $id
 * @property string $company_name
 * @property string $company_email_id
 * @property integer $company_lan_number
 * @property string $company_type
 * @property integer $company_mcode
 * @property integer $created_at
 * @property integer $upadted_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property UserCompany[] $userCompanies
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_name', 'company_email_id', 'company_lan_number', 'company_type', 'company_mcode', 'created_at', 'upadted_at', 'created_by', 'updated_by'], 'required'],
            [['company_lan_number', 'company_mcode', 'created_at', 'upadted_at', 'created_by', 'updated_by'], 'integer'],
            [['company_type'], 'string'],
            [['company_name', 'company_email_id'], 'string', 'max' => 255],
            [['company_name'], 'unique'],
            [['company_email_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => 'Company Name',
            'company_email_id' => 'Company Email ID',
            'company_lan_number' => 'Company Lan Number',
            'company_type' => 'Company Type',
            'company_mcode' => 'Company Mcode',
            'created_at' => 'Created At',
            'upadted_at' => 'Upadted At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserCompanies()
    {
        return $this->hasMany(UserCompany::className(), ['company_id' => 'id']);
    }
}
