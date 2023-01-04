<?php

namespace App\Http\Controllers\API\Frontend;

use App\Models\Contact;
use App\Uploads\FileUpload;
use Illuminate\Http\Request;
use App\Events\SendMailEvent;
use App\CrudMessage\CrudMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function sendContactMessage(ContactRequest $request)
    {
        $data = $request->all();

        $options         = FileUpload::setOptions('', Contact::class, 'store', 'contact_file', 'uploads/contact-us');
        $file            = new FileUpload($request, $options);
        $fileName        = $file->imgProcess();

        $data['contact_file'] = $fileName;

        Contact::create($data);

        $data['recipient'] = env('MAIL_FROM_ADDRESS');

        // event(new SendMailEvent($data));

        $message = new CrudMessage('Contact Message');

        return $message->createMsg();

    }
}
