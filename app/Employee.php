<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;

    class Employee extends Model
    {
        protected $fillable = [
            "name", "image", "department_id", "email", "phone_number",
            "user_id", "address", "city", "country", "is_active"
        ];

        public function payroll()
        : HasMany
        {
            return $this->hasMany(Payroll::class);
        }

    }
