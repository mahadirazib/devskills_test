<div>
    @if($label ?? false)
        <label for="{{ $name }}" class="block text-sm font-medium leading-6 text-gray-900">
            {{ $label }} @if($attributes->has('required'))<span class="text-red-600">*</span>@endif
        </label>
    @endif
    <div class="mt-2">
        <input
            id="{{ $name }}"
            name="{{ $name }}"
            type="{{ $type ?? 'text' }}"
            value="{{ old($name, $value ?? '') }}"
            placeholder="{{ $placeholder ?? '' }}"
            {{ $attributes->merge(['class' => 'form-control']) }}
        />
    </div>
    @error($name)
        <p class="" style="color: red;">{{ $message }}</p>
    @enderror
</div>
