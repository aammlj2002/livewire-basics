<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Datatable extends Component
{
    use WithPagination;
    public $active=true;
    public $search;
    public $sortField;
    public $sortAsc=true;
    protected $queryString = ["search", "active", "sortField", "sortAsc"];
    public function sortBy($field)
    {
        if ($this->sortField===$field) {
            $this->sortAsc=!$this->sortAsc;
        } else {
            $this->sortAsc = false;
        }
        $this->sortField = $field;
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.datatable', [
            'students'=> Student::where("active", $this->active)
            ->where(function ($query) {
                $query->where("name", "like", "%$this->search%")
                        ->orWhere("email", "like", "%$this->search%");
            })
            ->when($this->sortField, function ($query) {
                $query->orderBy($this->sortField, $this->sortAsc? "asc" : "desc");
            })->paginate(10)
        ]);
    }
}
