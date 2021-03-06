<?php

class m160821_161152_sharepage extends CDbMigration
{
    public function up()
    {
        $this->createTable('sharepage', array(
            'id' => 'pk',
            'text' => 'text NOT NULL',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->insert('sharepage', array(
            'text' => 'Задача организации, в особенности же начало повседневной работы по формированию позиции требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции влечет за собой процесс внедрения и модернизации модели развития. Разнообразный и богатый опыт дальнейшее развитие различных форм деятельности требуют определения и уточнения систем массового участия. Значимость этих проблем настолько очевидна, что сложившаяся структура организации требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Таким образом сложившаяся структура организации требуют от нас анализа соответствующий условий активизации. Повседневная практика показывает, что постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение существенных финансовых и административных условий.',
            'seo_description' => 'Акции',
            'seo_keywords' => 'Акции',
            'seo_title' => 'Акции',
        ));
    }

    public function down()
    {
        $this->dropTable('sharepage');
    }
}