@if ($addP) <p> @endif
    <img
        src="https://picsum.photos/{{ $width ?? '500' }}/{{ $height ?? '500' }}?random"
        style="max-width: 100%; {{ $style ?? '' }}"
        class="{{ $class ?? '' }}"
    >
@if ($addP) </p> @endif
