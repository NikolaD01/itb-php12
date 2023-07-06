<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Film extends Model

{
    use HasFactory;
    public function genres(): BelongsToMany {
        return $this->belongsToMany(Genre::class);
     }

         protected function runningTime(): Attribute{

             $locale = App::currentLocale();

            return Attribute::make(
                get: fn () => ($this->running_h ?($this->running_h." h ") : "").
                            ($this->running_m ?($this->running_m." min ") : "")
            );
        }
    
        public function writers(): BelongsToMany {
        return $this->belongsToMany(Person::class, 'film_writer'); // dodajemo naziv tabele koju koristimo
        
     }
}