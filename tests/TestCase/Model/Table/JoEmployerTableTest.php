<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JoEmployerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JoEmployerTable Test Case
 */
class JoEmployerTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JoEmployerTable
     */
    public $JoEmployer;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.JoEmployer',
        'app.Jomasters'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('JoEmployer') ? [] : ['className' => JoEmployerTable::class];
        $this->JoEmployer = TableRegistry::getTableLocator()->get('JoEmployer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->JoEmployer);

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
