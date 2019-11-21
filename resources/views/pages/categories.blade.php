@extends('layouts.app')
@section('main-row')
    {{--  Side Area  --}}
    @include('includes.sidebar')

    {{--  Main Area  --}}
    <div class="col-md-8" id="main-categories">
        <div id="categories-header">
            <h4>Categories</h4>
        </div>

        <div id="categories-container">
            <div id="categories-form">
                {{--  instead of writing our our forms from scratch ourselves and having to worry about adding @csrf, we can simply use laravelcollectives. just follow installation guide and use. syntax below  --}}
                {!! Form::open(['route' => "categories.add", 'method' => 'POST']) !!}

                    {!! Form::label('categoriesName', 'Name') !!}
                    {!! Form::text('categories_name', '', ['class' => 'form-control', 'placeholder' => 'Category Name']) !!}
                    {!! Form::submit('ADD CATEGORY', ['class' => 'btn mt-2 btn-success btn-lg font-weight-bold']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

