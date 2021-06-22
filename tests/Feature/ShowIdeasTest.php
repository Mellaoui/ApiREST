<?php

namespace Tests\Feature;

use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
   use RefreshDatabase;

   /** @test */
   public function list_of_ideas_shown_on_main_page(){

    $ideaOne = Idea::factory()->create([
        'title' => 'My Fisrt idea',
        'description' => 'Description of my first idea'
    ]
    );
    $ideaTwo = Idea::factory()->create([
        'title'=>'My first Idea',
        'desciption'=>'Description of my second idea'
    ]);
       $response = $this->get(route('community'));

       $response->assertSuccessful();
       $response->assertSee($ideaOne->title);
   }
}
