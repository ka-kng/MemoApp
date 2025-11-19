<?php

namespace App\Service;

use App\Models\Memo;
use Illuminate\Support\Facades\Auth;

class MemoService
{
  public function memostore($data)
  {
    $data['user_id'] = Auth::id();

    return Memo::create($data);
  }
}
