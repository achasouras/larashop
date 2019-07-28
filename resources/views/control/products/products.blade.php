@extends('layouts.control.app')

@section('title')
    Products
@endsection

@section('control.menu.main.logoside')
 Products
@endsection

@section('body_content')
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <a href="{{route('create_product')}}">Create product</a> |
    <a href="{{route('create_attribute')}}">Create attribute</a> <br>
    <br>

    <table class="striped highlight control_table">
        <thead>
            <tr>

    @php

        $columns = Illuminate\Support\Facades\Schema::getColumnListing('products'); // users table
        foreach ($columns as $column){
        	echo '<th>' . $column . '</th>';
        }
    @endphp
            </tr>
        <tbody>
        <tbody>
    @php
        $column_count = count($columns);

        foreach ($products as $product){
            echo '<tr>';
            foreach ($columns as $column){
                echo '<td>' . $product->$column . '</td>';
            }
            echo '</tr>';
        }

        echo '</tr>';
        echo '';

    @endphp
        </tbody>
    </table>
@endsection

@section('footer_content')
@endsection