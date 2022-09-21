<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules =[
        'name' => "required",
        'email' => "required",
        'message' => "required",
    ];
    public function submit(){
        $this->validate();

        Message::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'message'=>$this->message,
        ]);
        return redirect('/')->with('message','thank you for your response');
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
