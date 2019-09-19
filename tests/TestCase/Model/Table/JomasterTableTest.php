<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JomasterTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JomasterTable Test Case
 */
class JomasterTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JomasterTable
     */
    public $Jomaster;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Jomaster'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Jomaster') ? [] : ['className' => JomasterTable::class];
        $this->Jomaster = TableRegistry::getTableLocator()->get('Jomaster', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jomaster);

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
