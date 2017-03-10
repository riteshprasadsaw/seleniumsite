<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class WebhooksController extends Controller
{
  public function handle()
  {
      $payload = request()->all();

      $method = $this->eventToMethod($payload['type']);

      if(method_exists($this, $method))
      {
        $this->$method($payload);
      }

      return response('Webhook Received');
      //return redirect('myaccount')->with('success', 'Account deactivated');
  }

  public function whenCustomerSubscriptionDeleted($payload)
  {
    User::byStripeId(
      $payload['data']['object']['customer']
    )->deactivate();
  }

  public function whenCustomerSubscriptionCreated($payload)
  {
    User::byStripeId(
      $payload['data']['object']['customer']
    )->addSubscriptionId($payload['data']['object']['id']);
  }

  public function eventToMethod($event)
  {
    return 'when' . studly_case(str_replace('.', '_', $event));
  }

}