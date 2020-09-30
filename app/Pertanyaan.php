<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pertanyaan extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    protected static function boot() {
        parent::boot();
        static::deleting(function ($pertanyaans) {
            foreach ($pertanyaans->jawabans()->get() as $jawaban) {
                $jawaban->delete();
            }
        });
    }

    public function mapel() {
        return $this->belongsTo('App\Mapel', 'mapel_id', 'id');
    }

    public function jawabans() {
        return $this->hasMany('App\Jawaban', 'pertanyaan_id', 'id');
    }
}
