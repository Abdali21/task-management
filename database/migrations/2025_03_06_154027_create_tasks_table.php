<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use function GuzzleHttp\default_user_agent;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->enum("status", ["Not Started", "In progress", "Completed"])->default("Not Started");
            $table->date("due_date")->nullable();
            $table->unsignedBigInteger(("profile_id"));
            $table->foreign("profile_id")->references("id")->on("profiles")->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
