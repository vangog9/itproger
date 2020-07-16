@extends('layouts.app')

@section('title-block')
    Контактики
@endsection

@section('content')

    <h1> Contact </h1>

    <form action="/contact/submit" method="post">
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Введите E-Mail</label>
            <input type="text" name="email" placeholder="Введите E-Mail" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>
    </form>

@endsection
