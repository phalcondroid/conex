<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class ProductsMigration_100
 */
class ProductsMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('products', array(
                'columns' => array(
                    new Column(
                        'id_products',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        )
                    ),
                    new Column(
                        'id_product_type',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_products'
                        )
                    ),
                    new Column(
                        'id_users',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_product_type'
                        )
                    ),
                    new Column(
                        'id_product_capacity',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_users'
                        )
                    ),
                    new Column(
                        'name',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'id_product_capacity'
                        )
                    ),
                    new Column(
                        'slogan',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'name'
                        )
                    ),
                    new Column(
                        'description',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'slogan'
                        )
                    ),
                    new Column(
                        'created_at',
                        array(
                            'type' => Column::TYPE_TIMESTAMP,
                            'default' => "CURRENT_TIMESTAMP",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'description'
                        )
                    )
                ),
                'indexes' => array(
                    new Index('PRIMARY', array('id_products'), null),
                    new Index('fk_products_product_type1_idx', array('id_product_type'), null),
                    new Index('fk_products_users1_idx', array('id_users'), null),
                    new Index('fk_products_product_capacity1_idx', array('id_product_capacity'), null)
                ),
                'references' => array(
                    new Reference(
                        'fk_products_product_capacity1',
                        array(
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'product_capacity',
                            'columns' => array('id_product_capacity'),
                            'referencedColumns' => array('id_product_capacity')
                        )
                    ),
                    new Reference(
                        'fk_products_product_type1',
                        array(
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'product_type',
                            'columns' => array('id_product_type'),
                            'referencedColumns' => array('id_product_type')
                        )
                    ),
                    new Reference(
                        'fk_products_users1',
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
