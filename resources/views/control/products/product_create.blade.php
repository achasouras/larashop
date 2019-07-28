@extends('layouts.control.app')

@section('title')
    Control - Create product
@endsection

@section('control.menu.main.logoside')
    Create product
@endsection

@section('body_content')
    <form action="{{route('create_product_submit')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name*" required><br>
        @php

            foreach ($attributes as $attribute){

            $attribute->parent_required ? $required = ' required':$required = '';

            echo '<input type="text"' . $required . ' name="attid' . $attribute->id . '" placeholder="' . $attribute->name . ($required!==''?'*':'') . '"></input><br>';

            }
        @endphp
        <br>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
        </button>
    </form>
@endsection

@section('footer_content')
@endsection