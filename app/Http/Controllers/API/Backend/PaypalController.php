<?php

namespace App\Http\Controllers\API\Backend;

use URL;
use Auth;
use Input;
use Session;
use Redirect;
use Validator;
use Carbon\Carbon;
use PayPal\Api\Item;
use App\Models\Order;
use PayPal\Api\Payer;
use App\Http\Requests;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Payment;
use PayPal\Api\ItemList;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use Illuminate\Http\Request;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use App\Models\PaypalCredential;
use PayPal\Api\PaymentExecution;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Models\PaypalPaymentCreation;
use PayPal\Auth\OAuthTokenCredential;
use Illuminate\Support\Facades\Config;
use App\Paypal\CompanyPaymentExecution;
use App\Paypal\PaymentExecutionMechanism;
use App\Paypal\ServiceProviderPaymentExecution;
use App\Paypal\ServiceProviderPaymentMechanism;

class PaypalController extends Controller
{

    public function __construct()
    {
            

    }

    public function cashPaymentToComapny(Request $request)
    {

      
      $confirmation_code = mt_rand(1111,9999);
      $order = Order::find($request->order_id)->update([
        'payment_type' => 1,
        'order_status' => 1,
        'comfirmation_code' => $confirmation_code

      ]);



      return response()->json([
        'status' => 200,
        'message' => 'Your cash payment request is being processed. Wait until payment process is confirmed.'
      ]);
    }

    public function cashPaymentFromProvider(Request $request)
    {
      $order = Order::find($request->order_id)->update(
        [
          'is_company_payment' => 1
        ]
        );

        return response()->json([
          'status' => 200,
          'message' => 'Cash Payment has been accepted'
        ]);
    }


    public function createServiceProviderPayment(Request $request)
    {
      
      $createPayment = new ServiceProviderPaymentMechanism($request);

      return $createPayment->generatePayment();

    }


    // Service Provider payment execution from customer end
    public function executePaypal(Request $request)
    {        
    //    return $request->all();

     $paymentExecution = new ServiceProviderPaymentExecution($request);

     return $paymentExecution->processing();

      
    }

    public function executeCompanyPayment(Request $request)
    {        
      //  return $request->all();

     $paymentExecution = new CompanyPaymentExecution($request);

     return $paymentExecution->processing();

      
    }

    public function paypalPayouts($token){

      // return $token;
      $payloadData = '{
        "sender_batch_header": {
          "sender_batch_id": "Payouts_'.Carbon::now()->format('y').'_'.uniqid().'",
          "email_subject": "You have a payout!",
          "email_message": "You have received a payout! Thanks for using our service!"
        },
        "items": [
          {
            "recipient_type": "PAYPAL_ID",
            "amount": {
              "value": "5.32",
              "currency": "USD"
            },
            "note": "Thanks for your patronage!",
            "sender_item_id": "'.Carbon::now()->format('y').'_'.uniqid().'",
            "receiver": "94EF9LE3AGDCC"
          }
        ]
      }';

        
        $ch = curl_init("https://api-m.sandbox.paypal.com/v1/payments/payouts?scope={$token['scope']}");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        "Authorization: Bearer {$token['access_token']}"
        ));
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $payloadData);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        
        $result = curl_exec($ch);
        $array = json_decode($result, true); 
        $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return $array;

    }
}
