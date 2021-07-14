<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Signature;


class ReportSignature extends Controller
{
    public function update(Signature $signature)
    {
        $signature->flag();

        return $signature;
    }

    public function flag()
    {
        return $this->update(['flagged_at' => \Carbon\Carbon::now()]);
    }
}
