<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    protected $table = 'sys_member';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ( !Schema::hasTable( $this->table )) {
            Schema::create( $this->table , function (Blueprint $table) {
                $table->increments('iId');
                $table->string('vName', 128);
                $table->string('vGender', 16);
                $table->string('iBirthday', 64);
                $table->string('vEmail', 128);
                $table->string('vContact', 64);
                $table->string('vAddress', 256);
                $table->string('iCreateTime', 64);
                $table->string('iUpdateTime', 64);
                $table->string('bDel', 2)->default('0');
            });
        } else {
            Schema::table( $this->table , function (Blueprint $table) {
                $table->increments('iId');
                $table->string('vName', 128);
                $table->string('vGender', 16);
                $table->string('iBirthday', 64);
                $table->string('vEmail', 128);
                $table->string('vContact', 64);
                $table->string('vAddress', 256);
                $table->string('iCreateTime', 64);
                $table->string('iUpdateTime', 64);
                $table->string('bDel', 2)->default('0');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
