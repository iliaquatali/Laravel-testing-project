<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserSearch extends Component
{
    public $term;

    public function render()
    {
        return view('livewire.user-search',[
            'users'=>User::when($this->term,function($query, $term){
                return $query->where('name','LIKE',"%$term%")->orWhere('gender','LIKE',"%$term%");
            })->paginate(5)
        ]);
    }
}
