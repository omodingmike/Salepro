<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Transfer extends Model
    {
        protected $fillable = [

            "reference_no", "user_id", "status", "from_warehouse_id", "to_warehouse_id", "item", "total_qty", "total_tax", "total_cost", "shipping_cost", "grand_total", "document", "note"
        ];

        public function fromWarehouse()
        : BelongsTo
        {
            return $this->belongsTo(Warehouse::class, 'from_warehouse_id');
        }

        public function toWarehouse()
        : BelongsTo
        {
            return $this->belongsTo(Warehouse::class, 'to_warehouse_id');
        }

        public function user()
        : BelongsTo
        {
            return $this->belongsTo(User::class, 'user_id');
        }
    }
