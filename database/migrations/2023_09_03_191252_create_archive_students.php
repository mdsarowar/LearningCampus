<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create( 'archive_students', function ( Blueprint $table ) {
            $table->id();
            $table->integer( 'Session' );
            $table->string( 'Shift' );
            $table->string( 'Class' );
            $table->string( 'Section' );
            $table->integer( 'migrated_session' )->nullable();
            $table->string( 'migrated_class' )->nullable();
            $table->string( 'migrated_shift' )->nullable();
            $table->string( 'migrated_section' )->nullable();
            $table->integer( 'DeviceSerialMAC' )->nullable();
            $table->integer( 'StudentId' );
            $table->integer( 'TrackingID' )->nullable();
            // $table->integer( 'LastFingerID' )->nullable();
            $table->string( 'RFIDCardNo' )->nullable();
            $table->boolean( 'AttendanceSMS' )->nullable();

            $table->string( 'NameEnglish' );
            $table->string( 'BloodGroup' );
            $table->string( 'NameBengali' );
            $table->string( 'Religion' );
            $table->integer( 'DeviceSerialMACPersonal' )->nullable();
            $table->integer( 'StudentIdPersonal' );
            $table->date( 'DateOfBirth' );
            $table->string( 'Nationality' );
            $table->string( 'Gender' );
            $table->string( 'Photo' )->nullable();

            $table->integer( 'Mobile' );
            $table->string( 'Email' );
            $table->string( 'PresentAddress' );
            $table->string( 'ParmanantAddress' );

            $table->string( 'FatherName' );
            $table->string( 'MotherName' );
            $table->string( 'FatherPhone' );
            $table->string( 'MotherPhone' );
            $table->string( 'FatherNID' )->nullable();
            $table->string( 'MotherNID' )->nullable();
            $table->string( 'FatherProfession' );
            $table->string( 'MotherProfession' );
            $table->string( 'FatherDesignation' );
            $table->string( 'MotherDesignation' );
            $table->string( 'OfficeNameAddressFather' )->nullable();
            $table->string( 'OfficeNameAddressMother' )->nullable();
            $table->string( 'FatherOfficeContactNo' )->nullable();
            $table->string( 'MotherOfficeContactNo' )->nullable();
            $table->string( 'FatherPhoto' )->nullable();
            $table->string( 'MotherPhoto' )->nullable();

            $table->string( 'GuardianType' )->nullable();
            $table->string( 'GuardianProfession' )->nullable();
            $table->string( 'GuardianName' );
            $table->string( 'GuardianDesignation' )->nullable();
            $table->string( 'RelationWithStudent' )->nullable();
            $table->string( 'GuardianOfficeContactNo' )->nullable();
            $table->string( 'GuardianPhone' );
            $table->string( 'OfficeNameAddress' );
            
            
            $table->string( 'Status' )->nullable();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archive_students');
    }
};
