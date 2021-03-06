<?php

class m160821_161111_region extends CDbMigration
{
    public function up()
    {
        $this->createTable('region', array(
            'id' => 'pk',
            'country_id' => 'int(11) DEFAULT 0',
            'name' => 'varchar(255) NOT NULL',
            'status' => 'tinyint(11) DEFAULT 0',
        ));

        $this->createIndex('country_id', 'region', 'country_id');
        $this->createIndex('status', 'region', 'status');

        $this->insert('region', array(
            'country_id' => '1',
            'name' => 'Alberta',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '1',
            'name' => 'British Columbia',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '1',
            'name' => 'Manitoba',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '1',
            'name' => 'New Brunswick',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '1',
            'name' => 'Newfoundland and Labrador',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '1',
            'name' => 'Northwest Territories',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '1',
            'name' => 'Nova Scotia',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '1',
            'name' => 'Nunavut',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '1',
            'name' => 'Ontario',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '1',
            'name' => 'Prince Edward Island',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '1',
            'name' => 'Quebec',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '1',
            'name' => 'Saskatchewan',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '1',
            'name' => 'Yukon',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????? ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????? ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????? ???? ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????? ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????? (????????????) ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????? ????????????-????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????? ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????? ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????? ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????? ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????? ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????? ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????? ????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????????????? ????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????????? ????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????? ????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????????????? ????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????????? ????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????? ????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????? ????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????????????? ????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '??????????-??????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????? ???????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????? ???????????????????? ??????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '??????????-????????????????????-???????? ???????????????????? ??????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????? ???????????????????? ??????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '??????????-???????????????? ???????????????????? ??????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????? ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????? ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????????????? ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????? ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????? ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '?????????????????? ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '??????????????????-???????????????????? ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '???????????????? ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => '??????????????????-???????????????????? ????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Alabama',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Alaska',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Arizona',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Arkansas',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'California',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Colorado',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Connecticut',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Delaware',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Florida',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Georgia',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Hawaii',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Idaho',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Illinois',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Indiana',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Iowa',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Kansas',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Kentucky',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Louisiana',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Maine',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Maryland',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Massachusetts',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Michigan',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Minnesota',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Mississippi',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Missouri',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Montana',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Nebraska',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Nevada',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'New Hampshire',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'New Jersey',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'New Mexico',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'New York',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'North Carolina',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'North Dakota',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Ohio',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Oklahoma',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Oregon',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Pennsylvania',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Rhode Island',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'South Carolina',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'South Dakota',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Tennessee',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Texas',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Utah',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Vermont',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Virginia',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Washington',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Washington, D.C.',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'West Virginia',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Wisconsin',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '3',
            'name' => 'Wyoming',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '??????????-?????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '?????????????????? ???????????????????? ????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '?????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '?????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '???????????????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '???????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '?????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '???????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '???????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '???????????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '???????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '?????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '?????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '?????????? ????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '?????????? ??????????????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '???????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '?????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '???????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '???????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '?????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '?????????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '???????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '???????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '?????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '?????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '?????????????????????? ??????????????',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => '???????????????????????? ??????????????',
            'status' => '1',
        ));
    }

    public function down()
    {
        $this->dropTable('region');
    }
}