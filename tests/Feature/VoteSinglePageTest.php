<?php

namespace Tests\Feature;

use App\Http\Livewire\IdeaSingle;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class VoteSinglePageTest extends TestCase
{
   use RefreshDatabase;

   /** @test */

   public function  single_page_vote()
   {
        $user = User::factory()->create();

        $categoryOne = Category::factory()->create(['name'=>'Category1']);

        $statusopen = Status::factory()->create(['name'=>'Open']);

        $idea = Idea::factory()->create([
                'user_id'=>$user->id,
                'category_id'=>$categoryOne->id,
                'status_id'=>$statusopen->id,
                'title' => 'My First Idea',
                'description'=>'Description for my first idea',
            ]);

        Vote::factory()->create(
                [
                    'user_id'=>$user->id,
                    'idea_id'=>$idea->id
                ]
                );

  
        
        

            Livewire::actingAs($user)
            ->test(IdeaSingle::class,[
                'idea' => $idea,
                'votesCount' => 5
            ])->assertSet('Isvoted',true)
            ->assertSee('voted');
        //$this->get(route('showIdea', $idea))->assertSeeLivewire('idea-single');   

   }
}
