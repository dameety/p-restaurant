@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 300
    ])
    @formField('input', [
        'name' => 'title',
        'label' => 'Title',
        'maxlength' => 100
    ])
@stop
