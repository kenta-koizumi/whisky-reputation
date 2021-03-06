<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function reputations(){
        return $this->hasMany(Reputation::class);
    }
    
    public function loadRelationshipCounts(){
        $this->loadCount('reputations', 'followings', 'followers', 'favorites');
    }
    
    public function followings(){
        return $this->belongsToMany(User::class, 'user_follow', 'user_id', 'follow_id')->withTimestamps();
    }
    
    public function followers(){
        return $this->belongsToMany(User::class, 'user_follow', 'follow_id', 'user_id')->withTimestamps();
    }
    
    public function follow($userId){
        $exist = $this->is_following($userId);
        $its_me = $this->id === $userId;
        
        if($exist || $its_me){
            return false;
        }else{
            $this->followings()->attach($userId);
            return true;
        }
    }
    
    public function unfollow($userId){
        $exist = $this->is_following($userId);
        $its_me = $this->id ===$userId;
        
        if($exist & !$its_me){
            $this->followings()->detach($userId);
            return true;
        }else{
            return false;
        }
    }
    
    public function is_following($userId){
        return $this->followings()->where('follow_id', $userId)->exists();
    }
    
    public function feed_reputations()
    {
        $userIds = $this->followings()->pluck('users.id')->toArray();
        
        $userIds[] = $this->id;
        
        return Reputation::whereIn('user_id', $userIds);
    }
    //追加
    
    public function favorites(){
        return $this->belongsToMany(Whisky::class, 'fav_whisky', 'user_id', 'whisky_id')->withTimestamps();
    }
    
    public function favorite($whiskyId){
        $exist = $this->is_favorite($whiskyId);
        
        if ($exist === $whiskyId){
            return true;
        }else
        {
        $this->favorites()->attach($whiskyId);
        return false;
        }
    }
    
    public function unfavorite($whiskyId){
        $exist = $this->is_favorite($whiskyId);
        
        if ($exist && $whiskyId){
            $this->favorites()->detach($whiskyId);
        return true;
        }else{
            return false;
        }
        
    }
    
    public function is_favorite($whiskyId){
        return $this->favorites()->where('whisky_id', $whiskyId)->exists();
    }
    
}
