<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Idea extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
       return $this->hasMany(Comment::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function votes(){
        return $this->belongsToMany(User::class,'votes');
    }

    public function getStatusClass(){
        $allStatuses = [
            'Open' => 'bg-gray-200',
            'Considering'=> 'bg-purple text-white',
            'In Progress'=> 'bg-yellow text-white',
            'Implemented'=> 'bg-green text-white',
            'Closed'=>'bg-red text-white'
        ];

        return $allStatuses[$this->status->name];
    }

    public function isVotedByUser(?User $user){
        if(!$user) {
            return false;
        }else{
            return Vote::where('user_id', $user->id)->where('idea_id',$this->id)->exists();
        }
    }


    public function Vote(User $user){
        /*Vote::create([
            'user_id'=>$user->id,
            'idea_id'=>$this->id,
        ]);*/

        $this->votes()->attach($user);
    }


    public function UnVote(User $user){
        //Vote::where('idea_id',$this->id)->where('user_id',$user->id)->first()->delete();
        $this->votes()->detach($user);
    }

    public function getImage(){
        return $this->image
            ?
         Storage::disk('images')->url($this->image)
            :
         'Has no image';
    }


}
