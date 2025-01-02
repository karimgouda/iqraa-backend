<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;
    public $message;
    public $phone;
    public function save()
    {
        $this->validate([
          'name'=>'required|min:3|max:255',
          'email'=>'required|email|min:3|max:255',
          'message'=>'required',
            'phone'=>'required|min:7|max:11',
        ]);

        \App\Models\Contact::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'message'=>$this->message,
            'phone'=>$this->phone
        ]);
        session()->flash('success',__('pages.Send Message Successfully'));
        $this->reset('name','email','message','phone');

    }
    public function render()
    {
        return view('livewire.contact');
    }
}
