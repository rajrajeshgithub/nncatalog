<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Catalog extends Model
{
    protected $fillable = ['title','description'];
    public function admin(){
        return $this->belongsTo(Admin::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getUrlAttribute()
    {
        return route('catalogs.show',$this->id);
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }
    public function getStatusBadgeAttribute()
    {
        $badge = '';
        switch($this->status){
            case 1:
                $badge = '<span class="badge badge-success">Active</span>';
                break;
            default:
                $badge = '<span class="badge badge-default">In Active</span>';
        }
        return $badge;
    }
}
