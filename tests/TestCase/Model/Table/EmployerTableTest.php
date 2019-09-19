<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployerTable Test Case
 */
class EmployerTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployerTable
     */
    public $Employer;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Employer',
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
        $config = TableRegistry::getTableLocator()->exists('Employer') ? [] : ['className' => EmployerTable::class];
        $this->Employer = TableRegistry::getTableLocator()->get('Employer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Employer);

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
