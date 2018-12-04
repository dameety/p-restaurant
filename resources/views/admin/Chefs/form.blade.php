@extends('twill::layouts.form')

@section('contentFields')
    @formField('textarea', [
        'name' => 'bio',
        'label' => 'Bio',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'name',
        'label' => 'Name',
        'maxlength' => 100
    ])

    {{--@formField('files', [--}}
    {{--'name' => 'single_file_no_translate',--}}
    {{--'label' => 'Single file (no translate)',--}}
    {{--'note' => 'Add one file',--}}
    {{--'noTranslate' => true--}}
    {{--])--}}

    @formField('input', [
        'name' => 'role',
        'label' => 'Role',
        'maxlength' => 100
    ])

    @formField('medias', [
        'name' => 'profile_img',
        'label' => 'Profile Image',
        'note' => 'Image should be exactly 1464px X 1464px.',
        'max' => 1,
        'required' => true,
    ])
@stop
