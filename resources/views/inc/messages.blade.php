@if (session('success'))
    <div class="alert alert-success" role="alert" style="border-radius: 20px">
        {{ session('success') }}
    </div>
@endif


@if ($errors->any())
    <div class="alert alert-danger" style="border-radius: 20px">
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    </div>
@endif


@if (session('status'))
    <div class="alert alert-success" style="border-radius: 20px">
        {{ session('status') }}
    </div>
@endif
