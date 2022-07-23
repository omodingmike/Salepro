<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Holiday extends Model
    {
        protected $fillable = ["user_id", "from_date", "to_date", "note", "is_approved"];

        public static function createHoliday($data)
        {
            Holiday::create($data);
        }

        public function user()
        : BelongsTo
        {
            return $this->belongsTo(User::class);
        }
    }
