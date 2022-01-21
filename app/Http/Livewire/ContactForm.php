<?php

namespace App\Http\Livewire;

use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;
    public $contact;
    public $successMessage;
    protected $rules = [
        "name"=>"required|min:3",
        "email"=>"required|email",
        "phone"=>"required",
        "message"=>"required"
    ];
    public function updated($propertyName)
    {
        return $this->validateOnly($propertyName);
    }
    public function submitForm()
    {
        $contact = $this->validate();
        $contact["name"]=$this->name;
        $contact["email"]=$this->email;
        $contact["phone"]=$this->phone;
        $contact["message"]=$this->message;
        // dd($contact);
        sleep(1);
        ContactMessage::create($contact);
        $this->clearForm();
        $this->successMessage = "Message Sent";
    }
    protected function clearForm()
    {
        $this->name="";
        $this->email="";
        $this->phone="";
        $this->message="";
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
