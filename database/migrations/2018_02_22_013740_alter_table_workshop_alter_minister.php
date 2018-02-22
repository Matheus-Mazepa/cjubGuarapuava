<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableWorkshopAlterMinister extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $workshop = \App\Model\Workshop::where('name', 'Oficina de dança')->first();
        $workshop->minister = 'Daiany Horbusch Furmann';

        $workshop->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
