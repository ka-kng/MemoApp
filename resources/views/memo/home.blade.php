@extends('layouts.app')

@section('title', 'メモ一覧')

@section('h1', 'メモ一覧')
@section('content')
    <div class="px-5 max-w-screen-2xl m-auto py-10 text-white">

    </div>
@endsection

<div x-data="{ open: false }">
    <button @click="open = true"
        class="fixed bottom-10 right-10 w-16 h-16 bg-white text-black text-4xl rounded-full flex items-center justify-center shadow-lg hover:bg-gray-100 cursor-pointer">
        ＋
    </button>

    <div x-show="open" @click.away="open = false" class="space-y-5 fixed w-full pt-28 px-10">
        <input name="title" type="text" class="p-2 bg-white text-black w-full h-15 rounded placeholder-gray-500"
            placeholder="タイトル">

        <input name="subtitle" type="text" class="p-2 bg-white text-black w-full h-15 rounded placeholder-gray-500"
            placeholder="サブタイトル">

        <textarea name="subtitle" type="text" rows="13" cols="5"
            class="p-2 bg-white text-black w-full rounded placeholder-gray-500" placeholder="メモを入力してください"></textarea>

    </div>
</div>
