<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;

    class Brand extends Model
    {
        protected $fillable = [

            "title", "image", "is_active"
        ];

        public function product()
        : HasMany
        {
            return $this->hasMany(Product::class);

        }
    }
