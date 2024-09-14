<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id'); // Primary Key, Auto-increment
            $table->string('member_name', 50);
            $table->string('username', 20)->unique(); // Unique username
            $table->text('password');
            $table->string('phone', 10);
            $table->string('email', 50)->unique(); // Unique email
            $table->string('urole', 20);
            $table->timestamps(); // This will create `created_at` and `updated_at` timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
