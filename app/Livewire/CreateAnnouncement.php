<?php

namespace App\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateAnnouncement extends Component
{
    public $title;
    public $body;
    public $price;
    public $category;

    protected $rules = [
        'title' => 'required|min:4',
        'body' => 'required|min:8',
        'category' => 'required',
        'price' => 'required|numeric|max:999999',
    ];
    protected $messages = [
        'required' => 'il campo :attribute è richiesto',
        'min' => 'il campo :attribute è troppo corto',
        'numeric' => 'Il campo :attribute dev\'essere un numero',
        'max' => "Valore massimo di :attribute dev'essere massimo di dieci cifre.",
    ];

    public function store()
    {
        $this->validate();
        $category = Category::find($this->category);
        $announcement = $category->announcements()->create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
        ]);

        Auth::user()->announcements()->save($announcement);

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
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
