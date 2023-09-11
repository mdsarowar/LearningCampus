<?php

namespace App\Http\Controllers\StudentModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrintStudentID extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $tables = ['teachers', 'classes', 'shifts', 'sections', 'subjects', 'gender', 'religion', 'sessions', 'student_admission'];
        $dataArrays = [];

        foreach ( $tables as $table ) {
            $dataList = DB::select( "select * from $table" );
            $dataArrays[$table . 'List'] = json_decode( json_encode( $dataList ), true );
        }

        return view( 'admin.StudentModule.print_student_id', $dataArrays );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        //
    }
    public function Search( Request $request ) {
        $tables = ['sessions', 'classes', 'shifts', 'sections', 'student_admission'];
        $dataArrays = [];

        foreach ( $tables as $table ) {
            $dataList = DB::select( "select * from $table" );
            $dataArrays[$table . 'List'] = json_decode( json_encode( $dataList ), true );
        }

        $studentInfo = DB::table( 'student_admission' )
            ->where( [
                'Session'   => $request->session,
                'Class'     => $request->class,
                'Shift'     => $request->shift,
                'Section'   => $request->section,
                'StudentId' => $request->student_id,
            ] )->first();

        // dd( $studentInfo );
        return view( 'admin.StudentModule.print_student_id', ['studentInfo' => $studentInfo], $dataArrays );
    }
}
