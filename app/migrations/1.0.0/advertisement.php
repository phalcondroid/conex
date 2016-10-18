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
        $this->morphTable('advertisement', array(
                'columns' => array(
                    new Column(
                        'id_advertisement',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        )
                    ),
                    new Column(
                        'id_users',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_advertisement'
                        )
                    ),
                    new Column(
                        'name',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'id_users'
                        )
                    ),
                    new Column(
                        'publish_date',
                        array(
                            'type' => Column::TYPE_DATETIME,
                            'size' => 1,
                            'after' => 'name'
                        )
                    ),
                    new Column(
                        'address',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'publish_date'
                        )
                    ),
                    new Column(
                        'description',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'address'
                        )
                    ),
                    new Column(
                        'value',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'description'
                        )
                    ),
                    new Column(
                        'created_at',
                        array(
                            'type' => Column::TYPE_TIMESTAMP,
                            'default' => "CURRENT_TIMESTAMP",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'value'
                        )
                    )
                ),
                'indexes' => array(
                    new Index('PRIMARY', array('id_advertisement'), null),
                    new Index('fk_advertisement_users1_idx', array('id_users'), null)
                ),
                'references' => array(
                    new Reference(
                        'fk_advertisement_users1',
                        array(
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'users',
                            'columns' => array('id_users'),
                            'referencedColumns' => array('id_users')
                        )
                    )
                ),
                'options' => array(
                    'TABLE_TYPE' => 'BASE TABLE',
                    'AUTO_INCREMENT' => '5',
                    'ENGINE' => 'InnoDB',
                    'TABLE_COLLATION' => 'utf8_spanish_ci'
                ),
            )
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
