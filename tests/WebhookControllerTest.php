<?php 

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use TeamTNT\Stripe;

class WebhooksControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testWhenCustomerSubscriptionDeleted()
    {
      $tester = new TeamTNT\Stripe\WebhookTester('http:/127.0.0.1/stripe/webhook');
      $response = $tester->triggerEvent('customer.subscription.deleted');
      $this->assertEquals(200,$response->getStatusCode());

        //$this->assertTrue(true);
    }
}