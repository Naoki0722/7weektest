<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostMethodsController extends Controller
{
    public function show()
    {
        $items = DB::table('posts')->get();
        return response() -> json([
            'message' => 'comments_data got successfully',
            'data' => $items
        ], 200);
    }

    public function postComment(Request $request)
    {
        $now = Carbon::now();
        $items = [
            'name' => $request->name,
            'comment' => $request->comment,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('posts')->insert($items);
        return response() -> json([
            'message' => 'comments post successfully',
            'data' => $items
        ],200);
    }
}
