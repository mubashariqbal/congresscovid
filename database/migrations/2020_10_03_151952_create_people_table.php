<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();

            $table->string("office");
            $table->string("state_name")->nullable();
            $table->string("state_name_slug")->nullable();
            $table->string("state_code")->nullable();
            $table->string("state_code_slug")->nullable();
            $table->string("class")->nullable();
            $table->string("bioguide")->nullable();
            $table->string("thomas")->nullable();
            $table->string("opensecrets")->nullable();
            $table->string("votesmart")->nullable();
            $table->string("fec")->nullable();
            $table->string("maplight")->nullable();
            $table->string("wikidata")->nullable();
            $table->string("google_entity_id")->nullable();
            $table->string("title")->nullable();
            $table->string("party")->nullable();
            $table->string("name")->nullable();
            $table->string("name_slug")->nullable();
            $table->string("first_name")->nullable();
            $table->string("middle_name")->nullable();
            $table->string("last_name")->nullable();
            $table->string("name_suffix")->nullable();
            $table->string("goes_by")->nullable();
            $table->string("pronunciation")->nullable();
            $table->string("gender")->nullable();
            $table->string("ethnicity")->nullable();
            $table->string("religion")->nullable();
            $table->string("openly_lgbtq")->nullable();
            $table->date("date_of_birth")->nullable();
            $table->date("entered_office")->nullable();
            $table->date("term_end")->nullable();
            $table->text("biography")->nullable();
            $table->string("phone")->nullable();
            $table->string("fax")->nullable();
            $table->string("latitude")->nullable();
            $table->string("longitude")->nullable();
            $table->string("address_complete")->nullable();
            $table->string("address_number")->nullable();
            $table->string("address_prefix")->nullable();
            $table->string("address_street")->nullable();
            $table->string("address_sec_unit_type")->nullable();
            $table->string("address_sec_unit_num")->nullable();
            $table->string("address_city")->nullable();
            $table->string("address_state")->nullable();
            $table->string("address_zipcode")->nullable();
            $table->string("address_type")->nullable();
            $table->string("website")->nullable();
            $table->string("contact_page")->nullable();
            $table->string("facebook_url")->nullable();
            $table->string("twitter_handle")->nullable();
            $table->string("twitter_url")->nullable();
            $table->string("photo_url")->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('people');
    }
}
