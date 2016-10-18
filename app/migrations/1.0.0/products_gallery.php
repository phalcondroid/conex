<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class ProductsGalleryMigration_100
 */
class ProductsGalleryMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('products_gallery', array(
                'columns' => array(
                    new Column(
                        'id_products_gallery',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        )
                    ),
                    new Column(
                        'products_id_products',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_products_gallery'
                        )
                    ),
                    new Column(
                        'image',
                        array(
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'products_id_products'
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
                    new Index('PRIMARY', array('id_products_gallery'), null),
                    new Index('fk_products_gallery_products1_idx', array('products_id_products'), null)
                ),
                'references' => array(
                    new Reference(
                        'fk_products_gallery_products1',
                        array(
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'products',
                            'columns' => array('products_id_products'),
                            'referencedColumns' => array('id_products')
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
