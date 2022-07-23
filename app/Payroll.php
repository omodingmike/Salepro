<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Payroll extends Model
    {
        protected $fillable = [
            "reference_no", "employee_id", "account_id", "user_id",
            "amount", "paying_method", "note"
        ];

        public function employee()
        : BelongsTo
        {
            return $this->belongsTo(Employee::class);
        }
    }
