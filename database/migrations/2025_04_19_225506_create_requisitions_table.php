<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('requisitions', function (Blueprint $table) {
            $table->id();
            $table->enum('code_card', [
                'Fund Cluster : Fleet Card (OPCEN), Blue Color OCDRC IVB-1-2019 - 738766030358525000',
                'Fund Cluster : Fleet Card (ADMIN), Blue Color RA- OCD IVB-3 - 738766030225745104'
            ]);
            $table->string('division_card');
            $table->string('office_card');
            $table->string('liter_card');
            $table->enum('gasoline_card',[
                'XCS',
                'XTRA',
                'DIESEL',
            ]);
            $table->decimal('num_card', 5, 2);
            $table->decimal('amount_card', 10, 2);
            $table->decimal('balance_card', 10, 2);
            $table->string('invoice_card', 6);
            $table->string('plate_number');
            $table->string('car_card');
            $table->text('purpose_card');
            $table->string('request_name_card');
            $table->string('received_name_card');
            $table->string('position_card');
            $table->date('date_card');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisitions');
    }
};
