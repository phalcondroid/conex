<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class ServiceMigration_100
 */
class ServiceMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('service', [
                'columns' => [
                    new Column(
                        'id_service',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'id_service_type',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_service'
                        ]
                    ),
                    new Column(
                        'id_users',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_service_type'
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
                        'description',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'name'
                        ]
                    ),
                    new Column(
                        'info_json',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
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
                            'after' => 'info_json'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('PRIMARY', ['id_service'], 'PRIMARY'),
                    new Index('fk_service_service_type_idx', ['id_service_type'], null),
                    new Index('fk_service_users1_idx', ['id_users'], null)
                ],
                'references' => [
                    new Reference(
                        'fk_service_service_type',
                        [
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'service_type',
                            'columns' => ['id_service_type'],
                            'referencedColumns' => ['id_service_type'],
                            'onUpdate' => 'NO ACTION',
                            'onDelete' => 'NO ACTION'
                        ]
                    ),
                    new Reference(
                        'fk_service_users1',
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
