<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class MemberController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            new Middleware('auth:api', except: ['index']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Members = Member::all();
        return response()->json([
            'data' => $Members
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nama_Member' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'detail_alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $input = $request->all();

        
        $Members = Member::create($input);

        return response()->json([
            'data' => $Members
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $Members)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $Members)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $Members)
    {

        $validator = Validator::make($request->all(), [
            'nama_Member' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'detail_alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $input = $request->all();

      

        $Members->update($input);

        return response()->json([
            'message' => 'Member updated successfully',
            'data' => $Members
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $Members)
    {

        File::delete('uploads/' . $Members->gambar);
        $Members->delete();

        return response()->json([
            'message' => 'Member deleted successfully'
        ]);
    }
}
