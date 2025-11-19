@extends('layouts.app')

@section('title', 'メモ登録')

@section('h1', 'メモ登録')
@section('content')
    <div class="px-5 max-w-screen-2xl m-auto py-10 text-white">

        <form action="{{ route('memo.store') }}" method="POST">
            @csrf

            <div class="fixed inset-0 pt-32 pb-5 px-5 z-20">

                <div class="space-y-5">
                    <div>
                        <input name="title" type="text"
                            class="p-2 bg-stone-700 w-full h-15 rounded placeholder-white text-2xl" placeholder="タイトル">
                        @error('title')
                            <p class="text-red-400 text-xl">{{ $message }}</p> {{-- 追加：エラー表示 --}}
                        @enderror
                    </div>

                    <div>
                        <input name="subtitle" type="text"
                            class="p-2 bg-stone-700 w-full h-15 rounded placeholder-white text-xl" placeholder="サブタイトル">
                        @error('subtitle')
                            <p class="text-red-400 text-xl">{{ $message }}</p> {{-- 追加：エラー表示 --}}
                        @enderror
                    </div>

                    <div>
                        <textarea name="content" rows="10" class="p-2 bg-stone-700 w-full rounded placeholder-white"
                            placeholder="メモを入力してください"></textarea>
                    </div>
                </div>

                <div class="flex justify-center mt-3">
                    <x-button type="submit" label="登録" />
                </div>
            </div>
        </form>

    </div>
@endsection
