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
            'name' => 'Карелия республика',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Коми республика',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Марий Эл республика',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Мордовия республика',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Саха (Якутия) республика',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Северная Осетия-Алания',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Татарстан республика',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Тыва республика',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Удмуртская республика',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Хакасия республика',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Чеченская республика',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Чувашская республика',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Алтайский край',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Краснодарский край',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Красноярский край',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Приморский край',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Ставропольский край',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Хабаровский край',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Амурская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Архангельская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Астраханская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Белгородская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Брянская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Владимирская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Волгоградская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Вологодская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Воронежская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Ивановская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Иркутская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Калининградская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Калужская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Камчатский край',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Кемеровская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Кировская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Костромская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Курганская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Курская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Ленинградская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Липецкая область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Магаданская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Московская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Мурманская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Нижегородская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Новгородская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Новосибирская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Омская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Оренбургская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Орловская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Пензенская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Пермский край',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Псковская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Ростовская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Рязанская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Самарская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Саратовская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Сахалинская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Свердловская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Смоленская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Тамбовская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Тверская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Томская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Тульская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Тюменская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Ульяновская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Челябинская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Забайкальский край',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Ярославская область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Москва',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Санкт-Петербург',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Еврейская автономная область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Ненецкий автономный округ',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Ханты-Мансийский-Югра автономный округ',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Чукотский автономный округ',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Ямало-Ненецкий автономный округ',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Адыгея республика',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Алтай республика',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Башкортостан республика',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Бурятия республика',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Дагестан республика',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Ингушетия республика',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Кабардино-Балкарская республика',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Калмыкия республика',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '2',
            'name' => 'Карачаево-Черкесская республика',
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
            'name' => 'Івано-Франківська область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Автономна Республіка Крим',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Вінницька область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Волинська область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Дніпропетровська область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Донецька область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Житомирська область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Закарпатська область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Запорізька область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Кіровоградська область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Київська область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Луганська область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Львівська область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'місто Київ',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'місто Севастополь',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Миколаївська область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Одеська область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Полтавська область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Рівненська область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Сумська область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Тернопільська область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Харківська область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Херсонська область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Хмельницька область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Черкаська область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Чернівецька область',
            'status' => '1',
        ));

        $this->insert('region', array(
            'country_id' => '4',
            'name' => 'Чернігівська область',
            'status' => '1',
        ));
    }

    public function down()
    {
        $this->dropTable('region');
    }
}