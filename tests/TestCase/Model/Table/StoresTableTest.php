<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StoresTable Test Case
 */
class StoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StoresTable
     */
    public $Stores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stores',
        'app.companies',
        'app.locations',
        'app.aisles',
        'app.catalog_updates',
        'app.deal_updates',
        'app.price_updates',
        'app.robot_sessions',
        'app.stock_updates',
        'app.users_companies',
        'app.users_suppliers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Stores') ? [] : ['className' => StoresTable::class];
        $this->Stores = TableRegistry::get('Stores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Stores);

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