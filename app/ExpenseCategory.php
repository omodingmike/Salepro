<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;

    class ExpenseCategory extends Model
    {
        protected $fillable = [
            "code", "name", "is_active"
        ];

        public function expense()
        : HasMany
        {
            return $this->hasMany('App\Expense');
        }
    }
