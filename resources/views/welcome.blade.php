<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
<div class="container p-5">
    <h1>Laravel Laminas Form</h1>

    <div class="card">
        <div class="card-header">
            Simple render
        </div>
        <div class="card-body">
            {{ $form->render() }}
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-header">
            Detail render
        </div>
        <div class="card-body">
            @php
                $form->prepare();
            @endphp

            {!! $form->form()->openTag($form) !!}

            {{ csrf_field() }}

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">{!! $form->get('name')->getLabel()  !!}</label>
                <div class="col-sm-10">
                    {!! $form->formInput($form->get('name')) !!}
                </div>
            </div>

            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">{!! $form->get('email')->getLabel()  !!}</label>
                <div class="col-sm-10">
                    {!! $form->formInput($form->get('email')) !!}
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-sm-10 offset-sm-2">
                    {!! $form->formSubmit($form->get('send')) !!}
                </div>
            </div>

            {!! $form->form()->closeTag($form) !!}

        </div>
    </div>

    <div class="card mt-3">
        <div class="card-header">
            Bootstrap5 View Helper
        </div>
        <div class="card-body">
            {{ $form->render('bootstrap5horizon') }}
        </div>
    </div>
</div>
</body>
</html>
