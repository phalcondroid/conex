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
        $this->morphTable('products', [
                'columns' => [
                    new Column(
                        'id_products',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'id_product_type',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_products'
                        ]
                    ),
                    new Column(
                        'id_users',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_product_type'
                        ]
                    ),
                    new Column(
                        'id_product_capacity',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_users'
                        ]
                    ),
                    new Column(
                        'name',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'id_product_capacity'
                        ]
                    ),
                    new Column(
                        'slogan',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'name'
                        ]
                    ),
                    new Column(
                        'description',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'slogan'
                        ]
                    ),
                    new Column(
                        'created_at',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'default' => "CURRENT_TIMESTAMP",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'description'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('PRIMARY', ['id_products'], 'PRIMARY'),
                    new Index('fk_products_product_type1_idx', ['id_product_type'], null),
                    new Index('fk_products_users1_idx', ['id_users'], null),
                    new Index('fk_products_product_capacity1_idx', ['id_product_capacity'], null)
                ],
                'references' => [
                    new Reference(
                        'fk_products_product_capacity1',
                        [
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'product_capacity',
                            'columns' => ['id_product_capacity'],
                            'referencedColumns' => ['id_product_capacity'],
                            'onUpdate' => 'NO ACTION',
                            'onDelete' => 'NO ACTION'
                        ]
                    ),
                    new Reference(
                        'fk_products_product_type1',
                        [
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'product_type',
                            'columns' => ['id_product_type'],
                            'referencedColumns' => ['id_product_type'],
                            'onUpdate' => 'NO ACTION',
                            'onDelete' => 'NO ACTION'
                        ]
                    ),
                    new Reference(
                        'fk_products_users1',
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
