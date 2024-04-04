<?php

namespace App\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateAnnouncement extends Component
{
    use WithFileUploads;
    public $title;
    public $body;
    public $price;
    public $category;
    public $validated;
    public $temporary_images;
    public $images = [];
    public $image;
    public $announcement;

    protected $rules = [
        'title' => 'required|min:4',
        'body' => 'required|min:8',
        'category' => 'required',
        'price' => 'required|numeric|max:999999',
        'images.*' => 'image|max:2048',
        'temporary_images.*' => 'image|max:2048',
    ];
    protected $messages = [
        'required' => 'il campo :attribute è richiesto',
        'min' => 'il campo :attribute è troppo corto',
        'numeric' => 'Il campo :attribute dev\'essere un numero',
        'max' => "Valore massimo di :attribute dev'essere massimo di dieci cifre.",
        'temporary_images.required' => "L'immagine è richiesta",
        'temporary_images.*.image' => "i file devono essere immagini",
        'temporary_images.*.max' => "L'immagine dev'essere al massimodi 2mb",
        'images.image' => "L'immagine deve essere un'immagine",
        'images.max' => "L'immagine dev'essere al massimo di 2mb",
    ];
    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*'=>'image|max:2048'
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }
    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function store()
    {
        $this->validate();

        $this->announcement = Category::find($this->category)->announcements()->create($this->validate());

        if (count($this->images)) {
            foreach ($this->images as $image) {
                $this->announcement->images()->create(['path'=>$image->store('images','public')]);
            }
        }
        Auth::user()->announcements()->save($this->announcement);

        $this->cleanForm();
        redirect()->route('announcements.create')->with('success', 'Annuncio inserito con successo, dopo la verifica sarà pubblicato!');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function cleanForm()
    {
        $this->title = '';
        $this->body = '';
        $this->price = '';
        $this->category = '';
        $this->images = [];
        $this->temporary_images = [];
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
