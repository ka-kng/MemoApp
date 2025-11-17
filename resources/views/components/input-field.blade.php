<div class="flex flex-col space-y-2">
    <label for="{{ $id }}" class="text-2xl font-bold">{{ $label }}</label>
    <input
        id="{{ $id }}"
        class="h-10 bg-white rounded-sm placeholder-gray-400 p-2 text-black"
        type="{{ $type }}"
        placeholder="{{ $placeholder }}"
        name="{{ $name }}"
        value="{{ old($name) }}"
    >

    @error($name)
        <p class="text-red-400 text-xl">{{ $message }}</p> {{-- 追加：エラー表示 --}}
    @enderror
</div>
