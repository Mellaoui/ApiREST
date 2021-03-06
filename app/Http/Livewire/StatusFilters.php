<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class StatusFilters extends Component
{

    public $status;
    

    public $allstatusCount;
    public $openstatusCount;
    public $consideringstatusCount;
    public $inprogressstatusCount;
    public $implementedstatusCount;
    public $closedstatusCount;

   
    public function mount(){
        $this->allstatusCount  = Idea::count();
        $this->openstatusCount = Idea::where('status_id',1)->count();
        $this->consideringstatusCount = Idea::where('status_id',2)->count();
        $this->inprogressstatusCount = Idea::where('status_id',3)->count();
        $this->implementedstatusCount = Idea::where('status_id',4)->count();
        $this->closedstatusCount = Idea::where('status_id',5)->count();

        $this->status = request()->status ?? 'All';


        if(Route::currentRouteName()==='showIdea'){
            $this->status = null;
        }
    }

    public function setStatus($newStatus)
    {
        $this->status = $newStatus;
        $this->emit('queryStringUpdatedStatus', $this->status);
        if($this->getPreviousRouteName() === 'showIdea'){
            return redirect()->route('community', [
                'status' => $this->status,
            ]);  
        }
                 
    }


    public function render()
    {
        return view('livewire.status-filters');
    }


    private function getPreviousRouteName(){
        return app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName();
    }
}
