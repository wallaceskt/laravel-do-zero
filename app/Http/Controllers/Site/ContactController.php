<?php

namespace App\Http\Controllers\Site;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Notifications\NewContact;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.contact.index');
    }
    
    /**
     * contact
     *
     * @param  mixed $request
     * @return void
     */
    public function form(ContactFormRequest $request)
    {
        $contact = Contact::create($request->all());

        Notification::route('mail', config('mail.from.address'))->notify(new NewContact($contact));

        toastr()->success('O formulário foi enviado com sucesso!');

        return back();
        
        // return redirect()->route('site.contact')->with([
        //     'success' => true,
        //     'message' => 'O formulário foi enviado com sucesso!'
        // ]);
    }
}
