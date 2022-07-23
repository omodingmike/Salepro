<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;

    class Unit extends Model
    {
        protected $fillable = [

            "unit_code", "unit_name", "base_unit", "operator", "operation_value", "is_active"
        ];

        public function product()
        : HasMany
        {
            return $this->hasMany(Product::class);
        }
    }
