<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdminJoborderTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdminJoborderTable Test Case
 */
class AdminJoborderTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AdminJoborderTable
     */
    public $AdminJoborder;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AdminJoborder'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AdminJoborder') ? [] : ['className' => AdminJoborderTable::class];
        $this->AdminJoborder = TableRegistry::getTableLocator()->get('AdminJoborder', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdminJoborder);

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
