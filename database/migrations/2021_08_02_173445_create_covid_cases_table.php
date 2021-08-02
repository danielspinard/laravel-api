<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidCasesTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('covid_cases', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cases');
            $table->timestamp('report_date');
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('covid_cases');
    }
}
