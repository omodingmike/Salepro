<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Customer extends Model
    {
        protected $fillable = [
            "customer_group_id", "user_id", "name", "company_name",
            "email", "phone_number", "tax_no", "address", "city",
            "state", "postal_code", "country", "points", "deposit", "expense", "is_active"
        ];

        public function user()
        : BelongsTo
        {
            return $this->belongsTo(User::class);
        }
    }
