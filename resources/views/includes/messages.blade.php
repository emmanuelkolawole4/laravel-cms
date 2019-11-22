@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
@endif

{{-- we're using a session to display error or success messages after trying to add a category to the database --}}
@if (session('Error'))
    <div class="alert alert-danger">{{ session('Error') }}</div>
@endif

@if (session('Success'))
    <div class="alert alert-success">{{ session('Success') }}</div>
@endif