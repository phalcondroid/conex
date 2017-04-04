<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class AdvertisementMigration_100
 */
class AdvertisementMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('advertisement', [
                'columns' => [
                    new Column(
                        'id_advertisement',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'id_advertisement_characteristics',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_advertisement'
                        ]
                    ),
                    new Column(
                        'id_users',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_advertisement_characteristics'
                        ]
                    ),
                    new Column(
                        'name',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'id_users'
                        ]
                    ),
                    new Column(
                        'publish_date',
                        [
                            'type' => Column::TYPE_DATETIME,
                            'size' => 1,
                            'after' => 'name'
                        ]
                    ),
                    new Column(
                        'address',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'publish_date'
                        ]
                    ),
                    new Column(
                        'description',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'address'
                        ]
                    ),
                    new Column(
                        'value',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'description'
                        ]
                    ),
                    new Column(
                        'created_at',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'default' => "CURRENT_TIMESTAMP",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'value'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('PRIMARY', ['id_advertisement'], 'PRIMARY'),
                    new Index('fk_advertisement_users1_idx', ['id_users'], null),
                    new Index('fk_advertisement_advertisement_characteristics1_idx', ['id_advertisement_characteristics'], null)
                ],
                'references' => [
                    new Reference(
                        'fk_advertisement_advertisement_characteristics1',
                        [
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'advertisement_characteristics',
                            'columns' => ['id_advertisement_characteristics'],
                            'referencedColumns' => ['id_advertisement_characteristics'],
                            'onUpdate' => 'NO ACTION',
                            'onDelete' => 'NO ACTION'
                        ]
                    ),
                    new Reference(
                        'fk_advertisement_users1',
                        [
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'users',
                            'columns' => ['id_users'],
                            'referencedColumns' => ['id_users'],
                            'onUpdate' => 'NO ACTION',
                            'onDelete' => 'NO ACTION'
                        ]
                    )
                ],
                'options' => [
                    'TABLE_TYPE' => 'BASE TABLE',
                    'AUTO_INCREMENT' => '1',
                    'ENGINE' => 'InnoDB',
                    'TABLE_COLLATION' => 'latin1_swedish_ci'
                ],
            ]
        );
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {

    }

}
