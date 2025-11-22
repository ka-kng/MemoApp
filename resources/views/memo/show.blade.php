@extends('layouts.app')

@section('title', 'メモ一覧')

@section('h1', 'メモ一覧')
@section('content')
    <div class="max-w-screen-2xl m-auto px-5 py-8 text-white">
        <div class="space-y-5">

            <div class="flex gap-5 text-2xl justify-end">
                <a class="text-blue-400" href="{{ route('memo.edit', $memo->id) }}">編集</a>
                <form class="text-red-400" action="{{ route('memo.destroy', $memo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <div x-data="{ open: false }">
                      <button @click="open = true" class="cursor-pointer" type="button">削除</button>

                      <div x-show="open" @click.away="open = false"  class="fixed inset-0 opacity-70 bg-stone-700 relative"></div>

                      <div x-show="open" @click.away="open = false"  class="fixed inset-0">
                          <div class="bg-white flex flex-col inline-block justify-center items-center absolute">
                            <p>本当に削除しますか？</p>
                            <div class="flex">
                              <span>削除</span>
                              <span>キャンセル</span>
                            </div>
                          </div>
                      </div>

                    </div>

                </form>
            </div>

            <div class="bg-stone-700 p-3">
                <h2 class="text-2xl">{{ $memo->title }}</h2>
                <h3 class="text-xl mt-10">{{ $memo->subtitle }}</h3>
            </div>

            <div class="bg-stone-700 p-3 max-h-full h-104 overflow-y-auto">
                <h3 class="text-lg">{{ $memo->content }}</h3>
            </div>

        </div>
    </div>
@endsection
