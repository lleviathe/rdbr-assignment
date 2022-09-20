<?php

use App\Enums\RecruitmentStatus;
use App\Models\Candidate;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_status_changes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class);
            $table->text('comment')->nullable();
            $table->string('status_before');
            $table->string('status_after');
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
        Schema::dropIfExists('candidate_status_changes');
    }
};
