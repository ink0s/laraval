@extends('layouts.base')
	@section('content')
<div class="container">
    <h2 class="form-signin-heading">Ваши данные</h2>
{{ Form::open(array(
            'url' => 'signin',
            'class'=>'form-signin'                    
                            )) }}        
{{  Form::text('username', null, 
    array('class'=>'form-control', 
    'placeholder'=>'Email или имя', 
    'required'=>'required',
    'autofocus'=>'autofocus'
            )) }}
{{  Form::password('password', 
    array('class'=>'form-control', 
    'placeholder'=>'Password', 
    'required'=>'required'
                )) }}
 <label class="checkbox">               
{{   Form::checkbox('remember', 'remember-me')
    
}}
Запомнить меня
</label>
{{ Form::submit('Войти', array('class'=>'btn btn-lg btn-primary btn-block')); }}

{{ HTML::link('//password/remind', 'Забыли пароль?') }}
<br>
{{ HTML::link('/registration', 'Регистрация') }}


</div>
       <!--
       <div class="container">
   
    <form class="form-signin" role="form"  method="post">
        <h2 class="form-signin-heading">Ваши данные</h2>
        <input type="text" class="form-control" placeholder="Email или имя" name="username" required autofocus />
        <input type="password" class="form-control" placeholder="Password" name="password" required />
        <label class="checkbox">
            <input type="checkbox" name="remember" value="remember-me"> Запомнить меня
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>

        <a href="/password/remind">Забыли пароль?</a><br />
        <a href="/users/register">Регистрация</a>
    </form>
</div> -->
{{ Form::close() }}
@stop
	

