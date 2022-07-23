<?php

    namespace App\Providers;

    use App\Currency;
    use Illuminate\Support\Facades\App;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Support\Facades\View;
    use Illuminate\Support\ServiceProvider;

    class AppServiceProvider extends ServiceProvider
    {
        /**
         * Bootstrap any application services.
         *
         * @return void
         */

        /**
         * Register any application services.
         *
         * @return void
         */
        public function register()
        {
            //
        }

        public function boot()
        {
            /*if( (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) {
                URL::forceScheme('https');
            }*/
            //setting language
            // if(isset($_COOKIE['language'])) {
            //     \App::setLocale($_COOKIE['language']);
            // } else {
            //     \App::setLocale('en');
            // }
            App::setLocale('en');
            //get general setting value
            $general_setting = DB::table('general_settings')->latest()->first();

            $currency = Currency::find($general_setting->currency);
            info($currency);
            View::share('general_setting', $general_setting);
            View::share('currency', $currency);
            config(['staff_access' => $general_setting->staff_access, 'date_format' => $general_setting->date_format, 'currency' => $currency->code, 'currency_position' => $general_setting->currency_position]);

            $alert_product = DB::table('products')->where('is_active', true)->whereColumn('alert_quantity', '>', 'qty')->count();
            View::share('alert_product', $alert_product);
            Schema::defaultStringLength(191);
        }
    }
