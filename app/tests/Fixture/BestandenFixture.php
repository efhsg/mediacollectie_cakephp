<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BestandenFixture
 */
class BestandenFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'bestanden';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'created_at' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'updated_at' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'naam' => ['type' => 'string', 'length' => 200, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'bestandstype' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'map' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'schijf' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'grootte' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'bestandstype' => ['type' => 'index', 'columns' => ['bestandstype'], 'length' => []],
            'bestand_ibfk_2' => ['type' => 'index', 'columns' => ['map'], 'length' => []],
            'schijf' => ['type' => 'index', 'columns' => ['schijf'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'idx_bestand' => ['type' => 'unique', 'columns' => ['naam', 'schijf', 'map', 'bestandstype'], 'length' => []],
            'bestanden_ibfk_1' => ['type' => 'foreign', 'columns' => ['schijf'], 'references' => ['schijven', 'naam'], 'update' => 'cascade', 'delete' => 'setNull', 'length' => []],
            'bestanden_ibfk_2' => ['type' => 'foreign', 'columns' => ['map'], 'references' => ['mappen', 'id'], 'update' => 'cascade', 'delete' => 'setNull', 'length' => []],
            'bestanden_ibfk_3' => ['type' => 'foreign', 'columns' => ['bestandstype'], 'references' => ['bestandstypes', 'naam'], 'update' => 'cascade', 'delete' => 'setNull', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'created_at' => 1563142665,
                'updated_at' => 1563142665,
                'naam' => 'Lorem ipsum dolor sit amet',
                'bestandstype' => 'Lorem ipsum dolor sit amet',
                'map' => 1,
                'schijf' => 'Lorem ipsum dolor sit amet',
                'grootte' => 1
            ],
        ];
        parent::init();
    }
}
