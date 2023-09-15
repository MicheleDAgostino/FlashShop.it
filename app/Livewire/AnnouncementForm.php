<?php

namespace App\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AnnouncementForm extends Component
{

    use WithFileUploads;

    public $title;

    public $body;

    public $price;

    public $category;

    public $images = [];

    public $temporary_images;

    public $validated;

    protected $rules = [

        'title' => 'required|min:2|max:25',
        'body' => 'required|min:10|max:2000',
        'price' => 'required',
        'category' => 'required',
        'images.*' => 'image|max:8000',
        'temporary_images.*' => 'image|max:8000'

    ];

    protected $messages = [
        
        'title.required' => 'Campo obbligatorio',
        'body.required' => 'Campo obbligatorio',
        'price.required' => 'Campo obbligatorio',
        'category.required' => 'Campo obbligatorio',

        'images.image' => 'Il file deve essere un\'immagine',

        'title.min' => 'Minimo 2 caratteri',
        'title.max' => 'Massimo 25 caratteri',
        'body.min' => 'Minimo 10 caratteri',
        'body.max' => 'Massimo 2000 caratteri',
        'images.max' => 'L\'immagine è troppo grande',
        'temporary_images.*.max' => 'L\'immagine è troppo grande'

    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.announcement-form');
    }

    // public function store(){

    //     $this->validate();
    //     $category = Category::find($this->category);

    //     $announcement = $category->announcements()->create([
    //         'title' => $this->title,
    //         'body' => $this->body,
    //         'price' => $this->price
    //     ]);

    //     Auth::user()->announcements()->save($announcement);

    //     $this->reset();

    //     session()->flash('message', 'Annuncio inserito con successo!');

    // }

    public function updatedTemporaryImages(){

        if($this->validate(['temporary_images.*' => 'image|max:8000'])){

            foreach($this->temporary_images as $image){
                $this->images[] = $image;
            }

        }

    }

    public function removeImage($key){
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function store(){

        $this->validate();

        $this->announcement = Category::find($this->category)->announcements()->create($this->validate());
        if (count($this->images)) {
            foreach ($this->images as $image) {
                $this->announcement->images()->create(['path' => $image->store('images', 'public')]);
            }
        }

        session()->flash('message', 'Articolo inserito con successo, sarà pubblicato dopo la revisione');
        $this->reset();

    }
    
}
