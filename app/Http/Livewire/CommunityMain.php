<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use App\Models\User;
use Livewire\Component;

class CommunityMain extends Component
{

    public $idea;
    //public $votesCount;

    public function mount(Idea $idea, $votesCount){
        $this->idea = $idea;
        $this->votesCount = $votesCount;
    }

    public function render()
    {
        return view('livewire.community-main');
    }
}
