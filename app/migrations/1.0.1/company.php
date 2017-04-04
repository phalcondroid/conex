<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class CompanyMigration_100
 */
class CompanyMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('company', [
                'columns' => [
                    new Column(
                        'id_company',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'id_users',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_company'
                        ]
                    ),
                    new Column(
                        'id_legal_constitution',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_users'
                        ]
                    ),
                    new Column(
                        'id_size_company',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_legal_constitution'
                        ]
                    ),
                    new Column(
                        'id_company_assets',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_size_company'
                        ]
                    ),
                    new Column(
                        'id_employee_number',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_company_assets'
                        ]
                    ),
                    new Column(
                        'id_company_sector',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_employee_number'
                        ]
                    ),
                    new Column(
                        'id_coverage',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_company_sector'
                        ]
                    ),
                    new Column(
                        'name',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'id_coverage'
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
                        'logo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'slogan'
                        ]
                    ),
                    new Column(
                        'address',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'logo'
                        ]
                    ),
                    new Column(
                        'ceo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'address'
                        ]
                    ),
                    new Column(
                        'webpage',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'ceo'
                        ]
                    ),
                    new Column(
                        'email',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'webpage'
                        ]
                    ),
                    new Column(
                        'created_at',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'default' => "CURRENT_TIMESTAMP",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'email'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('PRIMARY', ['id_company'], 'PRIMARY'),
                    new Index('fk_company_legal_constitution1_idx', ['id_legal_constitution'], null),
                    new Index('fk_company_size_company1_idx', ['id_size_company'], null),
                    new Index('fk_company_company_assets1_idx', ['id_company_assets'], null),
                    new Index('fk_company_employee_number1_idx', ['id_employee_number'], null),
                    new Index('fk_company_company_sector1_idx', ['id_company_sector'], null),
                    new Index('fk_company_coverage1_idx', ['id_coverage'], null),
                    new Index('fk_company_users1_idx', ['id_users'], null)
                ],
                'references' => [
                    new Reference(
                        'fk_company_company_assets1',
                        [
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'company_assets',
                            'columns' => ['id_company_assets'],
                            'referencedColumns' => ['id_company_assets'],
                            'onUpdate' => 'NO ACTION',
                            'onDelete' => 'NO ACTION'
                        ]
                    ),
                    new Reference(
                        'fk_company_company_sector1',
                        [
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'company_sector',
                            'columns' => ['id_company_sector'],
                            'referencedColumns' => ['id_company_sector'],
                            'onUpdate' => 'NO ACTION',
                            'onDelete' => 'NO ACTION'
                        ]
                    ),
                    new Reference(
                        'fk_company_coverage1',
                        [
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'coverage',
                            'columns' => ['id_coverage'],
                            'referencedColumns' => ['id_coverage'],
                            'onUpdate' => 'NO ACTION',
                            'onDelete' => 'NO ACTION'
                        ]
                    ),
                    new Reference(
                        'fk_company_employee_number1',
                        [
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'employee_number',
                            'columns' => ['id_employee_number'],
                            'referencedColumns' => ['id_employee_number'],
                            'onUpdate' => 'NO ACTION',
                            'onDelete' => 'NO ACTION'
                        ]
                    ),
                    new Reference(
                        'fk_company_legal_constitution1',
                        [
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'legal_constitution',
                            'columns' => ['id_legal_constitution'],
                            'referencedColumns' => ['id_legal_constitution'],
                            'onUpdate' => 'NO ACTION',
                            'onDelete' => 'NO ACTION'
                        ]
                    ),
                    new Reference(
                        'fk_company_size_company1',
                        [
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'size_company',
                            'columns' => ['id_size_company'],
                            'referencedColumns' => ['id_size_company'],
                            'onUpdate' => 'NO ACTION',
                            'onDelete' => 'NO ACTION'
                        ]
                    ),
                    new Reference(
                        'fk_company_users1',
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
