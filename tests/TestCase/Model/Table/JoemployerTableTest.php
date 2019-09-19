<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JoemployerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JoemployerTable Test Case
 */
class JoemployerTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JoemployerTable
     */
    public $Joemployer;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Joemployer'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Joemployer') ? [] : ['className' => JoemployerTable::class];
        $this->Joemployer = TableRegistry::getTableLocator()->get('Joemployer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Joemployer);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
