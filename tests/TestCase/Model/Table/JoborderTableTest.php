<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JoborderTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JoborderTable Test Case
 */
class JoborderTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JoborderTable
     */
    public $Joborder;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Joborder'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Joborder') ? [] : ['className' => JoborderTable::class];
        $this->Joborder = TableRegistry::getTableLocator()->get('Joborder', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Joborder);

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
