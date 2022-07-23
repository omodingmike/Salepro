<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Sale extends Model
    {
        protected $fillable = [
            "reference_no", "user_id", "cash_register_id", "customer_id", "warehouse_id", "biller_id", "item", "total_qty", "total_discount", "total_tax", "total_price", "order_tax_rate", "order_tax", "order_discount", "coupon_id", "coupon_discount", "shipping_cost", "grand_total", "sale_status", "payment_status", "paid_amount", "document", "sale_note", "staff_note"
        ];

        public function biller()
        : BelongsTo
        {
            return $this->belongsTo(Biller::class);
        }

        public function customer()
        : BelongsTo
        {
            return $this->belongsTo(Customer::class);
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
