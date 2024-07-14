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
 Schema::create('payement2024s', function (Blueprint $table) {
$table->id();
 $table->string('bank_name');         
$table->string('nomg');
$table->string('prenomg');
$table->string('account_number');
$table->string('account_holder');
$table->string('student_name');
$table->string('depositor_name');
$table->string('phone_number');
$table->string('cni_number');
$table->string('viller');
$table->string('heure');
$table->date('payment_date');
$table->string('education_level');  
$table->string('level'); 
$table->string('filiere');   
$table->string('classe');
$table->string('purpose');       
$table->text('details');
$table->decimal('amount', 10, 2);
$table->decimal('service_fee', 10, 2);     
$table->decimal('total', 10, 2);
$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payement2024s');
    }
};
