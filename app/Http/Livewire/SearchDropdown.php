<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search;
    public $searchResults = [];
    public function updatedSearch($newValue)
    {
        if (!$this->search) {
            $this->searchResults = [];
            return;
        }
        $respond = Http::get('https://itunes.apple.com/search/?term='.$this->search.'&limit=10');
        // dd($respond->json());
        if (!$respond->json()) {
            $this->searchResults=[];
        } else {
            $this->searchResults = $respond->json()["results"];
        }
        // dump($this->searchResults);
    }
    public function render()
    {
        return view('livewire.search-dropdown');
    }
}
