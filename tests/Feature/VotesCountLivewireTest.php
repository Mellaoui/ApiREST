<?php

namespace Tests\Feature;

use App\Http\Livewire\CommunityIdeas;
use App\Models\Category;
use App\Models\Idea;
use App\Models\User;
use App\Models\Status;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class VotesCountLivewireTest extends TestCase
{

    use RefreshDatabase;
    /** @test */

    public function Livewire_component_recieves_votes_count(){
        $user = User::factory()->create(['name'=>'modi']);

        $categoryOne = Category::factory()->create(['name'=>'Category 1']);

        $status = Status::factory()->create(['name'=>'Open']);

        $ideaOne = Idea::factory()->create([
         'user_id'=> $user->id,
         'category_id'=>$categoryOne->id,
         'status_id'=>$status->id,
         'title' => 'My Fisrt idea',
         'description' => 'Description of my first idea'
            ]);
     
     $categoryTwo = Category::factory()->create(['name'=>'Category 1']);

     $ideaTwo = Idea::factory()->create([
         'user_id'=> $user->id,
         'category_id'=>$categoryTwo->id,
         'status_id'=>$status->id,
         'title'=>'My first Idea',
         'description'=>'Description of my second idea'
     ]);

     Vote::factory()->create([
        'idea_id' => $ideaOne->id,
        'user_id' => $user->id
     ]);


     Livewire::test(CommunityIdeas::class)->assertViewHas('ideas', function($ideas){
        return $ideas->first()->votes_count = 0;
    });
 
    }
}
