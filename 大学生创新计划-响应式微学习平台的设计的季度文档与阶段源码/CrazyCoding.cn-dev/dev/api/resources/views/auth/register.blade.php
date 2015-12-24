<form method="POST" action="/auth/register">
    {!! csrf_field() !!}
    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        密码
        <input type="password" name="password">
    </div>

    <div>
        确认密码
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">注册</button>
    </div>
</form>

@if(count($errors) > 0)
    <ul>
        @foreach($errors as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>

@endif