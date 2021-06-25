<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use App\Models\Status;
use App\Models\Vote;
use Livewire\Component;
use Livewire\WithPagination;

class CommunityIdeas extends Component
{
    use WithPagination;

    public $status = 'All';

    protected $queryString = [
        'status'
    ];

    protected $listerners = ['queryStringUpdated'];


    public function queryStringUpdated($newStatus){
        $this->status  = $newStatus;
    }
    public function render()
    {
       $statuses = Status::all()->pluck('id','name');

        return view('livewire.community-ideas',['ideas'=>Idea::with('user','category','status')
        ->when($this->status && $this->status !== 'All', function($query) use ($statuses){
            return $query->where('status_id',$statuses->get(request()->status));
        })
        ->addSelect(['voted_by_user' => Vote::select('id')
        ->where('user_id',auth()->id())
        ->whereColumn('idea_id','ideas.id')
        ])->withCount('votes')->latest()->simplePaginate(10)]);
    }
}
