@extends('layouts.app')

@section('title', 'メモ登録')

@section('h1', 'メモ登録')
@section('content')
    <div class="px-5 max-w-screen-2xl m-auto py-10 text-white">

        <form action="{{ $memo->id ? route('memo.update', $memo->id) : route('memo.store') }}" method="POST">
            @csrf
            @if ($memo->id)
                @method('PATCH')
            @endif

            <div class="space-y-7">
                <div>
                    <input name="title" type="text"
                        class="p-2 bg-stone-700 w-full h-16 rounded placeholder-white text-2xl" placeholder="タイトル"
                        value="{{ old('title', $memo->title ?? '') }}">
                    @error('title')
                        <p class="text-red-400 text-xl">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <input name="subtitle" type="text"
                        class="p-2 bg-stone-700 w-full h-16 rounded placeholder-white text-xl" placeholder="サブタイトル"
                        value="{{ old('subtitle', $memo->subtitle) }}">
                    @error('subtitle')
                        <p class="text-red-400 text-xl">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <textarea name="content" rows="12" class="p-2 bg-stone-700 w-full rounded placeholder-white"
                        placeholder="メモを入力してください">{{ old('content', $memo->content) }}</textarea>
                </div>
            </div>

            <div class="flex justify-center mt-3">
                @if ($memo->id)
                    <x-button type="submit" label="更新" />
                @else
                    <x-button type="submit" label="登録" />
                @endif
            </div>
        </form>

    </div>
@endsection
