@props(['width' => 90, 'height' => 90])

<img src="http://picsum.photos/seed/{{ rand(0, 10000) }}/{{ $width }}/{{ $height }}" alt="logo"
    class="rounded-xl">
