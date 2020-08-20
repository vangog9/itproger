@extends('layouts.app')

@section('title-block')
    Контактики
@endsection

@section('content')

    <h1> Страница контактов </h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('contact-form')}}" method="post">
        @csrf

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
            <input type="text" name="subject" placeholder="222 сообщения" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message" class="form-control" placeholder="11">
            </textarea>
        </div>

        <button type="submit" class="btn btn-success">Отправить</button>
    </form>

@endsection
