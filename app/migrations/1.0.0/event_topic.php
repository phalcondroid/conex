<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class EventTopicMigration_100
 */
class EventTopicMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('event_topic', array(
                'columns' => array(
                    new Column(
                        'id_event_topic',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        )
                    ),
                    new Column(
                        'id_event_guest',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_event_topic'
                        )
                    ),
                    new Column(
                        'id_events',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_event_guest'
                        )
                    ),
                    new Column(
                        'event_topic',
                        array(
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'id_events'
                        )
                    ),
                    new Column(
                        'date',
                        array(
                            'type' => Column::TYPE_DATETIME,
                            'size' => 1,
                            'after' => 'event_topic'
                        )
                    ),
                    new Column(
                        'created_at',
                        array(
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'date'
                        )
                    )
                ),
                'indexes' => array(
                    new Index('PRIMARY', array('id_event_topic'), null),
                    new Index('fk_event_topic_event_guest1_idx', array('id_event_guest'), null),
                    new Index('fk_event_topic_events1_idx', array('id_events'), null)
                ),
                'references' => array(
                    new Reference(
                        'fk_event_topic_event_guest1',
                        array(
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'event_guest',
                            'columns' => array('id_event_guest'),
                            'referencedColumns' => array('id_event_guest')
                        )
                    ),
                    new Reference(
                        'fk_event_topic_events1',
                        array(
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'events',
                            'columns' => array('id_events'),
                            'referencedColumns' => array('id_events')
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
