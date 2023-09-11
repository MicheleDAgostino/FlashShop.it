<?php

namespace App\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AnnouncementForm extends Component
{

    public $title;

    public $body;

    public $price;

    public $category;

    protected $rules = [

        'title' => 'required|min:2|max:25',
        'body' => 'required|min:10|max:2000',
        'price' => 'required',
        'category' => 'required'

    ];

    protected $messages = [
        
        'title.required' => 'Campo obbligatorio',
        'body.required' => 'Campo obbligatorio',
        'price.required' => 'Campo obbligatorio',
        'category.required' => 'Campo obbligatorio',

        'title.min' => 'Minimo 2 caratteri',
        'title.max' => 'Massimo 25 caratteri',
        'body.min' => 'Minimo 10 caratteri',
        'body.max' => 'Massimo 2000 caratteri'

    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.announcement-form');
    }

    public function store(){

        $this->validate();
        $category = Category::find($this->category);

        $announcement = $category->announcements()->create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price
        ]);

        Auth::user()->announcements()->save($announcement);

        $this->reset();

        session()->flash('message', 'Annuncio inserito con successo!');

    }
    
}
