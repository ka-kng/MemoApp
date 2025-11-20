@extends('layouts.app')

@section('title', 'メモ一覧')

@section('h1', 'メモ一覧')
@section('content')
    <div class="max-w-screen-2xl m-auto px-5 py-8 text-white">
        <div class="space-y-5">

            <div class="flex gap-5 text-2xl justify-end">
              <a class="text-blue-400" href="{{ route('memo.edit', $memo->id) }}">編集</a>
              <a class="text-red-400" href="">削除</a>
            </div>

            <div class="bg-stone-700 p-3">
                <h2 class="text-2xl">{{ $memo->title }}</h2>
                <h3 class="text-xl mt-10">{{ $memo->subtitle }}</h3>
            </div>

            <div class="bg-stone-700 p-3 max-h-full h-104 overflow-y-auto">
                <h3 class="text-lg">{{ $memo->content }}</h3>
            </div>

        </div>
    @endsection
