<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BestandenTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BestandenTable Test Case
 */
class BestandenTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BestandenTable
     */
    public $Bestanden;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Bestanden'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Bestanden') ? [] : ['className' => BestandenTable::class];
        $this->Bestanden = TableRegistry::getTableLocator()->get('Bestanden', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bestanden);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
