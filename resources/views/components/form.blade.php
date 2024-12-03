
<form action="{{ $action }}" method="{{ $method ?? 'POST' }}" {{ $attributes->merge(['class' => 'space-y-6']) }}>
  @csrf
  @if(strtoupper($method ?? 'POST') !== 'GET' && strtoupper($method ?? 'POST') !== 'POST')
      @method($method)
  @endif

  {{ $slot }}

  @if (isset($buttonText))
    <div class="col-span-full">
        <button
            type="submit"
            class="btn btn-success w-100 justify-center rounded-md p-2">
            {{ $buttonText ?? 'Submit' }}
        </button>
    </div>
  @endif
</form>
