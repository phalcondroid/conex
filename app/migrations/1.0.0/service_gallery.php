<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class ServiceGalleryMigration_100
 */
class ServiceGalleryMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('service_gallery', array(
                'columns' => array(
                    new Column(
                        'id_service_gallery',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        )
                    ),
                    new Column(
                        'id_service',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_service_gallery'
                        )
                    ),
                    new Column(
                        'image',
                        array(
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'id_service'
                        )
                    ),
                    new Column(
                        'created_at',
                        array(
                            'type' => Column::TYPE_TIMESTAMP,
                            'default' => "CURRENT_TIMESTAMP",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'image'
                        )
                    )
                ),
                'indexes' => array(
                    new Index('PRIMARY', array('id_service_gallery'), null),
                    new Index('fk_service_gallery_service1_idx', array('id_service'), null)
                ),
                'references' => array(
                    new Reference(
                        'fk_service_gallery_service1',
                        array(
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'service',
                            'columns' => array('id_service'),
                            'referencedColumns' => array('id_service')
                        )
                    )
                ),
                'options' => array(
                    'TABLE_TYPE' => 'BASE TABLE',
                    'AUTO_INCREMENT' => '1',
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
