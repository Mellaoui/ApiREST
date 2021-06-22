<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
   use RefreshDatabase;

   /** @test */
   public function list_of_ideas_shown_on_main_page(){
       $categoryOne = Category::factory()->create(['name'=>'Category 1']);

    $ideaOne = Idea::factory()->create([
        'title' => 'My Fisrt idea',
        'category_id'=>$categoryOne->id,
        'description' => 'Description of my first idea'
    ]
    );
    $categoryTwo = Category::factory()->create(['name'=>'Category 1']);
    $ideaTwo = Idea::factory()->create([
        'title'=>'My first Idea',
        'category_id'=>$categoryTwo->id,
        'desciption'=>'Description of my second idea'
    ]);
       $response = $this->get(route('community'));

       $response->assertSuccessful();
       $response->assertSee($ideaOne->title);
       $response->assertSee($ideaOne->description);
       $response->assertSee($categoryOne->name);
       $response->assertSee($ideaTwo->title);
       $response->assertSee($ideaTwo->description);
       $response->assertSee($categoryTwo->name);
   }
}
