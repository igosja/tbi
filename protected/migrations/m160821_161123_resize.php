<?php

class m160821_161123_resize extends CDbMigration
{
    public function up()
    {
        $this->createTable('resize', array(
            'id' => 'pk',
            'cut' => 'tinyint(1) DEFAULT 0',
            'height' => 'int(11) DEFAULT 0',
            'image_id' => 'int(11) DEFAULT 0',
            'url' => 'varchar(255) NOT NULL',
            'width' => 'int(11) DEFAULT 0',
        ));

        $this->createIndex('image_id', 'resize', 'image_id');

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '327',
            'image_id' => '4',
            'url' => '/uploads/cad/e1a/cf5/3653d5a7b1a1ec78fc8a.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '150',
            'image_id' => '1',
            'url' => '/uploads/a86/287/b7f/0df4c44364964e13a72e.jpg',
            'width' => '200',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '327',
            'image_id' => '5',
            'url' => '/uploads/f01/5db/634/c319ea9409f73176d07f.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '400',
            'image_id' => '5',
            'url' => '/uploads/86d/df5/8e0/5033fedc56c7a41dae51.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '327',
            'image_id' => '6',
            'url' => '/uploads/2c6/655/868/d8bf4f15617cdcad5081.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '400',
            'image_id' => '6',
            'url' => '/uploads/ea0/f82/c8c/d53f47b0550e760aef0d.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '400',
            'image_id' => '7',
            'url' => '/uploads/62c/d25/6b3/c98fa1a07c508ef49b42.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '327',
            'image_id' => '7',
            'url' => '/uploads/151/3c8/084/bb8e9be76b4e984ff757.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '327',
            'image_id' => '8',
            'url' => '/uploads/52b/8b3/463/2bc71e798a8a983c4c6a.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '327',
            'image_id' => '10',
            'url' => '/uploads/cfc/c58/657/d949fd22ecf5ea57ca6b.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '327',
            'image_id' => '9',
            'url' => '/uploads/38d/d6d/f41/b0060268a5a9fd52ac28.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '400',
            'image_id' => '10',
            'url' => '/uploads/aa6/ea6/c78/eb26f4f4870c589519d3.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '327',
            'image_id' => '11',
            'url' => '/uploads/4ce/9fe/3f4/b35e3b9a5d4ac2a2460a.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '400',
            'image_id' => '11',
            'url' => '/uploads/d7b/327/3ac/e5f7abec273c155edf9d.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '327',
            'image_id' => '12',
            'url' => '/uploads/97e/4cd/d35/19747cd3044697d79c97.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '400',
            'image_id' => '12',
            'url' => '/uploads/a95/209/64a/5491ba17c684e42d987a.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '327',
            'image_id' => '13',
            'url' => '/uploads/429/2c2/d1d/5e73f65e28099451269a.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '400',
            'image_id' => '13',
            'url' => '/uploads/6df/0a4/b05/7ca65515a616ef2da91d.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '327',
            'image_id' => '14',
            'url' => '/uploads/b48/9c7/4a4/30c68a878a532436b491.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '327',
            'image_id' => '15',
            'url' => '/uploads/77d/7d9/7dd/df85234a7203b59d1662.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '400',
            'image_id' => '15',
            'url' => '/uploads/6ef/5c4/f44/92d5ea78005fa14dad32.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '400',
            'image_id' => '15',
            'url' => '/uploads/7f3/d62/f8d/441edb83faff93e2234e.jpg',
            'width' => '600',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '280',
            'image_id' => '16',
            'url' => '/uploads/bf4/ef9/2a9/712d0445a8d0817048f8.jpg',
            'width' => '280',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '350',
            'image_id' => '18',
            'url' => '/uploads/67f/4ab/fa0/a7d4218a98a1b4e2c7a6.jpg',
            'width' => '1200',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '530',
            'image_id' => '19',
            'url' => '/uploads/cf1/007/f25/1ced44301d8a6b7e2923.jpg',
            'width' => '380',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '250',
            'image_id' => '19',
            'url' => '/uploads/054/785/fd4/a9fa2ea2d6342972b12b.jpg',
            'width' => '380',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '250',
            'image_id' => '23',
            'url' => '/uploads/da9/dec/ea9/6eb48c749dadbcd4c765.jpg',
            'width' => '380',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '250',
            'image_id' => '20',
            'url' => '/uploads/56c/4c8/40b/b3b96b379539b41673f5.jpg',
            'width' => '380',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '250',
            'image_id' => '21',
            'url' => '/uploads/d91/5e3/885/1256a0e79f0823f83d84.jpg',
            'width' => '380',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '250',
            'image_id' => '21',
            'url' => '/uploads/a12/6ee/c02/71870831aaacbdf8c971.jpg',
            'width' => '380',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '280',
            'image_id' => '24',
            'url' => '/uploads/2cb/b41/ae5/7698ad4dfa8f1c557f0b.jpg',
            'width' => '280',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '380',
            'image_id' => '19',
            'url' => '/uploads/f5d/67c/d43/c1cc7302642cbdafcd58.jpg',
            'width' => '380',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '380',
            'image_id' => '20',
            'url' => '/uploads/072/7a0/176/c6b53d853b0d97e4d646.jpg',
            'width' => '380',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '380',
            'image_id' => '21',
            'url' => '/uploads/545/d22/d7d/86c690320f1c9983dc25.jpg',
            'width' => '380',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '380',
            'image_id' => '22',
            'url' => '/uploads/354/f90/c10/52460d01ef5629e3b986.jpg',
            'width' => '380',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '380',
            'image_id' => '23',
            'url' => '/uploads/901/1d0/a57/2e1c4702057d30670abc.jpg',
            'width' => '380',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '162',
            'image_id' => '1',
            'url' => '/uploads/909/8a4/ce4/ed312667d89ecb1707b2.jpg',
            'width' => '216',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '150',
            'image_id' => '25',
            'url' => '/uploads/6d8/91c/615/6fe412bf27301155dbc9.jpg',
            'width' => '200',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '162',
            'image_id' => '25',
            'url' => '/uploads/b75/508/25f/d0c44139d4d0db514a81.jpg',
            'width' => '216',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '162',
            'image_id' => '28',
            'url' => '/uploads/f65/c9c/ce9/8b14e158885008091394.jpg',
            'width' => '216',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '150',
            'image_id' => '26',
            'url' => '/uploads/8c3/77e/f6e/064d2d1062625df7a68e.jpg',
            'width' => '200',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '150',
            'image_id' => '27',
            'url' => '/uploads/6f5/cba/464/44c013fbc704f658bbea.jpg',
            'width' => '200',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '150',
            'image_id' => '28',
            'url' => '/uploads/3e0/14d/8e3/2c6dee7d41b9393d365b.jpg',
            'width' => '200',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '150',
            'image_id' => '29',
            'url' => '/uploads/379/85d/456/cc91c6ad2ab127ff00f4.jpg',
            'width' => '200',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '150',
            'image_id' => '30',
            'url' => '/uploads/3d1/08c/569/b6bd9b32b896c165de58.jpg',
            'width' => '200',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '150',
            'image_id' => '31',
            'url' => '/uploads/ad0/ab8/91a/19c35dcbbd0dbc5f9b96.jpg',
            'width' => '200',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '162',
            'image_id' => '32',
            'url' => '/uploads/781/5b3/fa2/35efda1b0fb1b1011c13.jpg',
            'width' => '216',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '150',
            'image_id' => '32',
            'url' => '/uploads/2c5/663/c5c/5ae8e951f3b1b570be58.jpg',
            'width' => '200',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '150',
            'image_id' => '33',
            'url' => '/uploads/288/6a5/848/346b51bd22f55b87fa28.jpg',
            'width' => '200',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '150',
            'image_id' => '35',
            'url' => '/uploads/a82/cb5/621/26d9417c6c254e353e39.jpg',
            'width' => '200',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '150',
            'image_id' => '34',
            'url' => '/uploads/233/d99/9f4/44dec799bb505f43ed79.jpg',
            'width' => '200',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '150',
            'image_id' => '36',
            'url' => '/uploads/585/be6/c5a/6696164b3f39e57dfacf.jpg',
            'width' => '200',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '150',
            'image_id' => '37',
            'url' => '/uploads/8f7/95d/e64/b3df829dae3cf0a5c21a.jpg',
            'width' => '200',
        ));

        $this->insert('resize', array(
            'cut' => '1',
            'height' => '280',
            'image_id' => '38',
            'url' => '/uploads/d72/3ea/0f6/ee8be1c5403c37c5f38a.jpg',
            'width' => '280',
        ));
    }

    public function down()
    {
        $this->dropTable('resize');
    }
}