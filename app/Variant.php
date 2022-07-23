<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;

    class Variant extends Model
    {
        protected $fillable = ['name'];

        public function product()
        : BelongsToMany
        {
            return $this->belongsToMany(Variant::class, 'product_variants');
        }
    }
