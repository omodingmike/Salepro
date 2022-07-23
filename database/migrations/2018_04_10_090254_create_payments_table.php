<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreatePaymentsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('payments', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('sale_id');
                $table->string('payment_reference');
                $table->double('amount');
                $table->double('change');
                $table->string('paying_method');
                $table->text('payment_note')->nullable();
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('payments');
        }
    }
