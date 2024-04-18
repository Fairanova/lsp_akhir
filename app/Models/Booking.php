<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function getDateStart()
    {
        return Carbon::parse( $this->date_start)->format('d F Y (H:i)');
    }
    public function getDateEnd()
    {
        return Carbon::parse( $this->date_end)->format('d F Y (H:i)');
    }

    public function lapangan()
    {
        return $this->belongsTo(Lapangan::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
