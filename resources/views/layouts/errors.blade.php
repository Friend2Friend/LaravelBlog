@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="notification is-danger">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif