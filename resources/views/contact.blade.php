@extends('layout')

@section('title','Contact')

@section('content')

    <h1>Contact</h1>
{{--
   @if($errors->any())
   <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        
        @endforeach
   </ul>

   @endif
--}}



    <form method='POST' action="{{ route('contact') }}">
        @csrf 
        <input name="name" placeholder="Nombre" value='{{ old('name') }}' >
        {!! $errors->first('name','<small>:message</small><br>') !!} <br>
        <input name="email" placeholder="Email" value='{{ old('email') }}' >
        {!! $errors->first('email','<small>:message</small><br>') !!} <br>
        <input name="subject" placeholder=" Asunto ..." value='{{ old('subject') }}'>
        {!! $errors->first('subject','<small>:message</small><br>') !!} <br>
        <textarea name="content" placeholder="Mensaje ..." >{{ old('content') }}</textarea>
        {!! $errors->first('content','<small>:message</small><br>') !!} <br>
        <button>Enviar</button>

    </form>    

@endsection
