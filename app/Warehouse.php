<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;

    class Warehouse extends Model
    {
        protected $fillable = [

            "name", "phone", "email", "address", "is_active"
        ];

        public function product()
        : HasMany
        {
            return $this->hasMany(Product::class);
        }

        public function products()
        : \Illuminate\Database\Eloquent\Relations\BelongsToMany
        {
            return $this->belongsToMany(Product::class,'product_warehouse','warehouse_id','product_id');
        }
    }
