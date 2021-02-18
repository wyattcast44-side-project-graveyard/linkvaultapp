<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LinkIndex extends Component
{
    public $links;

    public $newLink;

    protected $listeners = ['linkAdded' => 'updateLinks'];

    public function mount()
    {
        $this->links = auth()->user()->links;
        // dd($this->links->first()->data);
    }

    public function updateLinks()
    {
        $this->links = auth()->user()->refresh()->links;
    }

    public function deleteLink($link)
    {
        $link = auth()->user()->links()->find($link);

        if ($link) {
            $link->delete();
            $this->links = auth()->user()->links;
        }
    }

    public function render()
    {
        return view('dashboard.links.index')
            ->extends('layouts.app')
            ->section('content');
    }
}
