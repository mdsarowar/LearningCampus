
{{-- form submission message start --}}
@if (session('error'))
    <div class="alert alert-danger col-8 m-auto text-center">
        {{ session('error') }}
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success col-8 m-auto text-center">
        {{ session('success') }}
    </div>
@endif
{{-- form submission message end --}}
