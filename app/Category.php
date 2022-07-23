<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;

    class Category extends Model
    {
        protected $fillable = [

            "name", 'image', "parent_id", "is_active"
        ];

        public function product()
        : HasMany
        {
            return $this->hasMany(Product::class);
        }
    }
