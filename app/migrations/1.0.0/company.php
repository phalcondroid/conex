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
        $this->morphTable('company', array(
                'columns' => array(
                    new Column(
                        'id_company',
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
                            'after' => 'id_company'
                        )
                    ),
                    new Column(
                        'id_legal_constitution',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_users'
                        )
                    ),
                    new Column(
                        'id_size_company',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_legal_constitution'
                        )
                    ),
                    new Column(
                        'id_company_assets',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_size_company'
                        )
                    ),
                    new Column(
                        'id_employee_number',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_company_assets'
                        )
                    ),
                    new Column(
                        'id_company_sector',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_employee_number'
                        )
                    ),
                    new Column(
                        'id_coverage',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_company_sector'
                        )
                    ),
                    new Column(
                        'name',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'id_coverage'
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
                        'logo',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'slogan'
                        )
                    ),
                    new Column(
                        'address',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'logo'
                        )
                    ),
                    new Column(
                        'ceo',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'address'
                        )
                    ),
                    new Column(
                        'webpage',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'ceo'
                        )
                    ),
                    new Column(
                        'email',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'webpage'
                        )
                    ),
                    new Column(
                        'created_at',
                        array(
                            'type' => Column::TYPE_TIMESTAMP,
                            'default' => "CURRENT_TIMESTAMP",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'email'
                        )
                    )
                ),
                'indexes' => array(
                    new Index('PRIMARY', array('id_company'), null),
                    new Index('fk_company_legal_constitution1_idx', array('id_legal_constitution'), null),
                    new Index('fk_company_size_company1_idx', array('id_size_company'), null),
                    new Index('fk_company_company_assets1_idx', array('id_company_assets'), null),
                    new Index('fk_company_employee_number1_idx', array('id_employee_number'), null),
                    new Index('fk_company_company_sector1_idx', array('id_company_sector'), null),
                    new Index('fk_company_coverage1_idx', array('id_coverage'), null),
                    new Index('fk_company_users1_idx', array('id_users'), null)
                ),
                'references' => array(
                    new Reference(
                        'fk_company_company_assets1',
                        array(
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'company_assets',
                            'columns' => array('id_company_assets'),
                            'referencedColumns' => array('id_company_assets')
                        )
                    ),
                    new Reference(
                        'fk_company_company_sector1',
                        array(
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'company_sector',
                            'columns' => array('id_company_sector'),
                            'referencedColumns' => array('id_company_sector')
                        )
                    ),
                    new Reference(
                        'fk_company_coverage1',
                        array(
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'coverage',
                            'columns' => array('id_coverage'),
                            'referencedColumns' => array('id_coverage')
                        )
                    ),
                    new Reference(
                        'fk_company_employee_number1',
                        array(
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'employee_number',
                            'columns' => array('id_employee_number'),
                            'referencedColumns' => array('id_employee_number')
                        )
                    ),
                    new Reference(
                        'fk_company_legal_constitution1',
                        array(
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'legal_constitution',
                            'columns' => array('id_legal_constitution'),
                            'referencedColumns' => array('id_legal_constitution')
                        )
                    ),
                    new Reference(
                        'fk_company_size_company1',
                        array(
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'size_company',
                            'columns' => array('id_size_company'),
                            'referencedColumns' => array('id_size_company')
                        )
                    ),
                    new Reference(
                        'fk_company_users1',
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
