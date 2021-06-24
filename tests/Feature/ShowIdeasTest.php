<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Idea;
use App\Models\User;
use App\Models\Status;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
   use RefreshDatabase;

   /** @test */
   public function list_of_ideas_shown_on_main_page(){
       $user = User::factory()->create(['name'=>'modi']);
       $categoryOne = Category::factory()->create(['name'=>'Category 1']);
        $status = Status::factory()->create(['name'=>'Open']);
    $ideaOne = Idea::factory()->create([
        'user_id'=> $user->id,
        'category_id'=>$categoryOne->id,
        'status_id'=>$status->id,
        'title' => 'My Fisrt idea',
        'description' => 'Description of my first idea'
    ]
    );
    /*
    $categoryTwo = Category::factory()->create(['name'=>'Category 1']);
    $ideaTwo = Idea::factory()->create([
        'user_id'=> $user->id,
        'category_id'=>$categoryTwo->id,
        'status_id'=>$status->id,
        'title'=>'My first Idea',
        'desciption'=>'Description of my second idea'
    ]);
    */
       $response = $this->get(route('community'));

       $response->assertSuccessful();
       $response->assertSee($ideaOne->title);
       $response->assertSee($ideaOne->description);
       $response->assertSee($categoryOne->name);
      /* $response->assertSee($ideaTwo->title);
       $response->assertSee($ideaTwo->description);
       $response->assertSee($categoryTwo->name);*/
   }
}
