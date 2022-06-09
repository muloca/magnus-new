@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all as $error)
            <li class="error text-red">{{ $error }}</li>
        @endforeach
    </ul>
@endif
