@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li style="list-style-type: none; font-weight:bold; color: red;">{{ $message }}</li>
        @endforeach
    </ul>
@endif
