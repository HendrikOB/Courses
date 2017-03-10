@if (!$errors->isEmpty())
    <div class="alert alert-danger">
        <p><strong>Opps!</strong> please fix the following erros:</p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif