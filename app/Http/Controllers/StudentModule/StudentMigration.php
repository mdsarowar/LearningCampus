<?php

namespace App\Http\Controllers\StudentModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentMigration extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $tables = ['teachers', 'classes', 'shifts', 'sections', 'subjects', 'gender', 'religion', 'sessions', 'current_students'];
        $dataArrays = [];

        foreach ( $tables as $table ) {
            $dataList = DB::select( "select * from $table" );
            $dataArrays[$table . 'List'] = json_decode( json_encode( $dataList ), true );
        }
        // dd($dataArrays);
        return view( 'admin.StudentModule.student_migration', $dataArrays );
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
    public function update( Request $request ) {
        $fromSession = $request->input( 'from_session' );
        $fromClass = $request->input( 'from_class' );
        $fromShift = $request->input( 'from_shift' );
        $fromSection = $request->input( 'from_section' );

        $toSession = $request->input( 'to_session' );
        $toClass = $request->input( 'to_class' );
        $toShift = $request->input( 'to_shift' );
        $toSection = $request->input( 'to_section' );

        // Update records based on the selected criteria
        DB::table( 'current_students' )
            ->where( 'Session', $fromSession )
            ->where( 'Class', $fromClass )
            ->where( 'Shift', $fromShift )
            ->where( 'Section', $fromSection )

            ->update( [
                'migrated_session' => $toSession,
                'migrated_class'   => $toClass,
                'migrated_shift'   => $toShift,
                'migrated_section' => $toSection,
                'Session'          => $fromSession,
                'Class'            => $fromClass,
                'Shift'            => $fromShift,
                'Section'          => $fromSection,
            ] );

        return redirect()->back()->with( 'success', 'Migration completed successfully' );
        // return "migration updated";
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
