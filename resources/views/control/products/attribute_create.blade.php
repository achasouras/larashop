@extends('layouts.control.app')

@section('title')
    Control - Create Attribute
@endsection

@section('control.menu.main.logoside')
    Create attribute
@endsection

@section('body_content')

    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <form method="post" action="{{route('create_attribute_submit')}}">
        <input type="text" name="name" placeholder="Name *" required> <br>
        <input type="text" name="position" placeholder="position"> <br>

        <p>
            <label>
                <input type="checkbox" class="filled-in" name="parent_required" />
                <span>Required on parent</span>
            </label>
        </p>

        <p>
            <label>
                <input type="checkbox" class="filled-in" name="variation_required" />
                <span>Required on variation</span>
            </label>
        </p>

        @csrf
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
        </button>
    </form>
@endsection

@section('footer_content')
@endsection
