<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('design_checkouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->nullable();
            $table->string('name');
            $table->string('contact');
            $table->string('address');
            $table->string('kf')->nullable();
            $table->string('sleeve')->nullable();
            $table->string('nf')->nullable();
            $table->string('bottom')->nullable();
            $table->string('kb')->nullable();
            $table->string('nb')->nullable();
            $table->string('ankle')->nullable();
            $table->string('armhole')->nullable();
            $table->string('aroundhead')->nullable();
            $table->string('fbklb')->nullable();
            $table->string('backwidth')->nullable();
            $table->string('bottomlength')->nullable();
            $table->string('bust')->nullable();
            $table->string('elbow')->nullable();
            $table->string('frontchest')->nullable();
            $table->string('fbklf')->nullable();
            $table->string('swf')->nullable();
            $table->string('fullsleeve')->nullable();
            $table->string('insideleg')->nullable();
            $table->string('hip')->nullable();
            $table->string('midcalf')->nullable();
            $table->string('midthigh')->nullable();
            $table->string('nw')->nullable();
            $table->string('outleg')->nullable();
            $table->string('shoulder')->nullable();
            $table->string('se')->nullable();
            $table->string('wh')->nullable();
            $table->string('waist')->nullable();
            $table->string('wrist')->nullable();
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
        Schema::dropIfExists('design_checkouts');
    }
}
