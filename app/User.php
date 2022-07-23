<?php

    namespace App;

    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Spatie\Permission\Traits\HasRoles;

    class User extends Authenticatable
    {
        use Notifiable;
        use HasRoles;

        protected $fillable = [
            'name', 'email', 'password', "phone", "company_name", "role_id", "biller_id", "warehouse_id", "is_active", "is_deleted"
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        public function isActive()
        {
            return $this->is_active;
        }

        public function holiday()
        : HasMany
        {
            return $this->hasMany(Holiday::class);
        }

        public function warehouse()
        : \Illuminate\Database\Eloquent\Relations\HasOne
        {
            return $this->hasOne(Warehouse::class,'id' ,'warehouse_id');
        }
    }
