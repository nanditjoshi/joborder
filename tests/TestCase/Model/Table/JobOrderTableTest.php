<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JobOrderTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JobOrderTable Test Case
 */
class JobOrderTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JobOrderTable
     */
    public $JobOrder;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.JobOrder'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('JobOrder') ? [] : ['className' => JobOrderTable::class];
        $this->JobOrder = TableRegistry::getTableLocator()->get('JobOrder', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->JobOrder);

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
