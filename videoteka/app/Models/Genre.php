<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Genre extends Model

{
    use HasFactory;

    protected $fillable = ['id', 'name_en', 'name_sr'];

    public function films(): BelongsToMany {

        return $this->belongsToMany(Film::class);

    }   

    protected function name(): Attribute{

        $locale = App::currentLocale();

        return Attribute::make(
            get: fn () => ($locale=='sr' ? $this->name_sr : $this->name_en),
        );
    }
}