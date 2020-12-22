@if ($errors->any())
    <div class="alert" style="color: firebrick;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif