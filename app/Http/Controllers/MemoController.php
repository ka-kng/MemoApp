<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemoRequest;
use App\Models\Memo;
use App\Service\MemoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemoController extends Controller
{
    protected $service;

    public function __construct(MemoService $service)
    {
        $this->service = $service;
    }

    // 投稿の一覧表示
    public function index()
    {
        $userId = Auth::id();
        $memos = Memo::where('user_id', $userId)->latest()->get();
        return view('memo.index', compact('memos'));
    }

    //　メモ登録のフォーム表示
    public function create()
    {
        $memo = new Memo();
        return view('memo.create', compact('memo'));
    }

    // 投稿の新規登録
    public function store(MemoRequest $request)
    {
        $this->service->memostore($request->validated());

        return redirect()->route('memo.index');
    }

    // メモの詳細ページの表示
    public function show(Memo $memo)
    {

        return view('memo.show', compact('memo'));
    }

    // メモ編集用フォームの表示
    public function edit(Memo $memo)
    {
        return view('memo.create', compact('memo'));
    }

    // 投稿の更新
    public function update(MemoRequest $request, Memo $memo)
    {
        $this->service->memoupdate($request->validated(), $memo);

        return redirect()->route('memo.index');
    }

    // メモを削除
    public function destroy(Memo $memo)
    {
        $memo->delete();

        return redirect()->route('memo.index');
    }
}
