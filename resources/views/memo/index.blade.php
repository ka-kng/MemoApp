@extends('layouts.app')

@section('title', 'メモ一覧')

@section('h1', 'メモ一覧')
@section('content')
    <div class="max-w-screen-2xl m-auto px-5 py-8 text-white">
        <div class="space-y-8">
            @foreach ($memos as $memo)
                <div class="bg-stone-700 hover:bg-stone-600 p-3">
                    <a href="{{ route('memo.show', $memo->id) }}">
                        <h2 class="text-2xl truncate">{{ $memo->title }}</h2>
                        <h3 class="text-xl mt-10 truncate">{{ $memo->subtitle }}</h3>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
