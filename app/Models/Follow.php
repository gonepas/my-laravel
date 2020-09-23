<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Follow extends Model
{
    use HasFactory;
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    public static function create($data) {
        DB::table('follows')->insert([
            'follower_id' => $data['follower_id'],
            'following_id' => $data['following_id'],
            'status' => $data['status'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }

}
