<?php

    namespace App;

    use App\Warehouse;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class ReturnPurchase extends Model
    {
        protected $table = 'return_purchases';
        protected $fillable = [
            "reference_no", "user_id", "supplier_id", "warehouse_id", "account_id", "item", "total_qty", "total_discount", "total_tax", "total_cost", "order_tax_rate", "order_tax", "grand_total", "document", "return_note", "staff_note"
        ];

        public function supplier()
        : BelongsTo
        {
            return $this->belongsTo(Supplier::class);
        }

        public function warehouse()
        : BelongsTo
        {
            return $this->belongsTo(Warehouse::class);
        }

        public function user()
        : BelongsTo
        {
            return $this->belongsTo(User::class);
        }
    }
