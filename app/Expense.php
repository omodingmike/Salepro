<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Expense extends Model
    {
        protected $fillable = [
            "reference_no", "expense_category_id", "warehouse_id", "account_id", "user_id", "cash_register_id", "amount", "note"
        ];

        public function warehouse()
        : BelongsTo
        {
            return $this->belongsTo(Warehouse::class);
        }

        public function expenseCategory()
        : BelongsTo
        {
            return $this->belongsTo(ExpenseCategory::class);
        }
    }
