<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemoRequest;
use App\Service\MemoService;
use Illuminate\Http\Request;

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
        return view('memo.index');
    }

    public function create()
    {
        return view('memo.create');
    }

    // 投稿の新規登録
    public function store(MemoRequest $request)
    {
        $this->service->memostore($request->validated());

        return redirect()->route('memo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
