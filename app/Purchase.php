<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Purchase extends Model
    {
        protected $fillable = [
            "reference_no", "user_id", "warehouse_id", "supplier_id", "item", "total_qty", "total_discount", "total_tax", "total_cost", "order_tax_rate", "order_tax", "order_discount", "shipping_cost", "grand_total", "paid_amount", "status", "payment_status", "document", "note"
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
    }
