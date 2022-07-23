<?php

    namespace App;

    use App\Warehouse;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Quotation extends Model
    {
        protected $fillable = [

            "reference_no", "user_id", "biller_id", "supplier_id", "customer_id", "warehouse_id", "item", "total_qty", "total_discount", "total_tax", "total_price", "order_tax_rate", "order_tax", "order_discount", "shipping_cost", "grand_total", "quotation_status", "document", "note"
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

        public function supplier()
        : BelongsTo
        {
            return $this->belongsTo(Supplier::class);
        }

        public function user()
        : BelongsTo
        {
            return $this->belongsTo(User::class);
        }

        public function warehouse()
        : BelongsTo
        {
            return $this->belongsTo(Warehouse::class);
        }
    }
