<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;

    class Product extends Model
    {
        protected $fillable = [
            "name", "code", "type", "barcode_symbology", "brand_id", "category_id", "unit_id", "purchase_unit_id", "sale_unit_id", "cost", "price", "qty", "alert_quantity", "promotion", "promotion_price", "starting_date", "last_date", "tax_id", "tax_method", "image", "file", "is_batch", "is_variant", "is_diffPrice", "is_imei", "featured", "product_list", "variant_list", "qty_list", "price_list", "product_details", "is_active"
        ];

        public function category()
        : BelongsTo
        {
            return $this->belongsTo(Category::class);
        }

        public function brand()
        : BelongsTo
        {
            return $this->belongsTo(Brand::class);
        }

        public function unit()
        : BelongsTo
        {
            return $this->belongsTo(Unit::class);
        }

        public function variant()
        : BelongsToMany
        {
            return $this->belongsToMany(Variant::class, 'product_variants')->withPivot('id', 'item_code', 'additional_price');
        }

        public function scopeActiveStandard($query)
        {
            return $query->where([
                ['is_active', true],
                ['type', 'standard']
            ]);
        }

        public function scopeActiveFeatured($query)
        {
            return $query->where([
                ['is_active', true],
                ['featured', 1]
            ]);
        }

//        public function getPriceAttribute($value)
//        : string
//        {
//            return number_format($value,0);
//        }
    }
