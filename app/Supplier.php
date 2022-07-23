<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;

    class Supplier extends Model
    {
        protected $fillable = [

            "name", "image", "company_name", "vat_number",
            "email", "phone_number", "address", "city",
            "state", "postal_code", "country", "is_active"

        ];

        public function product()
        : HasMany
        {
            return $this->hasMany(Product::class);
        }
    }
