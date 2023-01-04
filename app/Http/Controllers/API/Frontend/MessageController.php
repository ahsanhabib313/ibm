<?php

namespace App\Http\Controllers\API\Frontend;

use App\Models\User;
use App\Models\Message;
use App\Uploads\FileUpload;
use Illuminate\Http\Request;
use App\CrudMessage\CrudMessage;
use App\Events\MessageMailSentEvent;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function sendMessage(Request $request)
    {
        $data = $request->except(['provider_email']);

        $options         = FileUpload::setOptions('', Message::class, 'store', 'message_file', 'uploads/message');
        $file            = new FileUpload($request, $options);
        $fileName        = $file->imgProcess();

        $data['message_file'] = $fileName;

        Message::create($data);

        $customer = User::find($request->customer_id);

        $data['recipient'] = $request->provider_email;
        $data['customer_name'] = $customer->name;
        $data['customer_email'] = $customer->email;
        $data['customer_phone'] = $customer->phone;

        event(new MessageMailSentEvent($data));

        $message = new CrudMessage('Message');

        return $message->createMsg();


    }
}
