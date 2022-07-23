<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class MoneyTransfer extends Model
    {
        protected $fillable = ['reference_no', 'from_account_id', 'to_account_id', 'amount'];

        public function fromAccount()
        : BelongsTo
        {
            return $this->belongsTo(Account::class);
        }

        public function toAccount()
        : BelongsTo
        {
            return $this->belongsTo(Account::class);
        }
    }
