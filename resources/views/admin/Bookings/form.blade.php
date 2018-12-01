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
    @formField('input', [
        'translated' => true,
        'name' => 'subtitle_translated',
        'label' => 'Subtitle (translated)',
        'maxlength' => 250,
        'required' => true,
        'note' => 'Hint message goes here',
        'placeholder' => 'Placeholder goes here',
        'type' => 'textarea',
        'rows' => 3
    ])
@stop
