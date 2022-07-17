<?php

use App\Enums\RecruitmentStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->index();
            $table->string('last_name')->index();
            $table->string('email')->index();
            $table->string('phone')->index();
            $table->string('position')->index();
            $table->integer('years_of_experience');
            $table->integer('salary_from')->nullable();
            $table->integer('salary_to')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->enum(
                'status',
                array_map(static fn($status) => $status->value, RecruitmentStatus::cases())
            )->default(
                RecruitmentStatus::INITIAL->value
            );
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
};
