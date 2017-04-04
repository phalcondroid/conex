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
        $this->morphTable('event_topic', [
                'columns' => [
                    new Column(
                        'id_event_topic',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'id_event_guest',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_event_topic'
                        ]
                    ),
                    new Column(
                        'id_events',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_event_guest'
                        ]
                    ),
                    new Column(
                        'event_topic',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'id_events'
                        ]
                    ),
                    new Column(
                        'date',
                        [
                            'type' => Column::TYPE_DATETIME,
                            'size' => 1,
                            'after' => 'event_topic'
                        ]
                    ),
                    new Column(
                        'created_at',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'date'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('PRIMARY', ['id_event_topic'], 'PRIMARY'),
                    new Index('fk_event_topic_event_guest1_idx', ['id_event_guest'], null),
                    new Index('fk_event_topic_events1_idx', ['id_events'], null)
                ],
                'references' => [
                    new Reference(
                        'fk_event_topic_event_guest1',
                        [
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'event_guest',
                            'columns' => ['id_event_guest'],
                            'referencedColumns' => ['id_event_guest'],
                            'onUpdate' => 'NO ACTION',
                            'onDelete' => 'NO ACTION'
                        ]
                    ),
                    new Reference(
                        'fk_event_topic_events1',
                        [
                            'referencedSchema' => 'conex',
                            'referencedTable' => 'events',
                            'columns' => ['id_events'],
                            'referencedColumns' => ['id_events'],
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
