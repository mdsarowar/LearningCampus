<?php

namespace App\Http\Controllers\ResultModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarksEntryBlank extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $tables = ['classes', 'sessions', 'shifts', 'sections', 'examterm', 'exampart', 'groups'];
        $dataArrays = [];

        foreach ( $tables as $table ) {
            $dataList = DB::select( "select * from $table" );
            $dataArrays[$table . 'List'] = json_decode( json_encode( $dataList ), true );
        }
        // dd($dataArrays);
        return view( 'admin.ResultModule.marks_entry_blank', $dataArrays );
        // return view('admin.ResultModule.marks_entry_blank');
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
        $session = $request->input( 'session' );
        $class = $request->input( 'class' );
        $group = $request->input( 'group' );
        $shift = $request->input( 'shift' );
        $section = $request->input( 'section' );
        $examterm = $request->input( 'examterm' );
        $exampart = $request->input( 'exampart' );
        $subject = $request->input( 'subject' );

        $insertData = DB::insert( 'insert into marks_entry_blank_sheet (session , class , `group` , shift ,section ,exam_term ,exam_part , subject) value (?,?,?,?,?,?,?,?)', [$session, $class, $group, $shift, $section, $examterm, $exampart, $subject] );

        if ( $insertData ) {
            // return $request->input();
            return redirect( route( 'marks.entry.blank' ) )->with( 'success', "New Marks Entry Blank Sheet added successfully" );
        } else {
            // return $insertData;
            return redirect( route( 'marks.entry.blank' ) )->with( 'error', 'Failed to create Marks Entry Blank Sheet' );
        }
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
}
