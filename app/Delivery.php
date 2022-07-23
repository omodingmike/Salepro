<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Delivery extends Model
    {
        protected $fillable = [
            "reference_no", "sale_id", "user_id", "address", "delivered_by", "recieved_by", "file", "status", "note"
        ];

        public function sale()
        : BelongsTo
        {
            return $this->belongsTo(Sale::class);
        }

        public function user()
        : BelongsTo
        {
            return $this->belongsTo(User::class);
        }
    }
