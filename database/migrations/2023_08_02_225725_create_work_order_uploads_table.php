<?php

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
        Schema::create('work_order_uploads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('work_order_id');
            $table->unsignedBigInteger('work_order_assign_id');
            $table->boolean('for_approver_approval')->default(false);
            $table->boolean('for_customer_approval')->default(false);
            $table->boolean('is_closed')->default(false);
            $table->unsignedBigInteger('status_id')->nullable();
            $table->unsignedBigInteger('approval_status_id')->nullable();
            $table->unsignedBigInteger('employee_id');
            

            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
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
        Schema::dropIfExists('work_order_uploads');
    }
};
