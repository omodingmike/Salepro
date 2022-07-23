<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;

    class Tax extends Model
    {
        protected $fillable = [
            "name", "rate", "is_active"
        ];

        public function product()
        : HasMany
        {
            return $this->hasMany(Product::class);
        }
    }
