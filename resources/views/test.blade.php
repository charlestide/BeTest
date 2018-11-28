<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}


</head>
<body>
<div class="flex-center position-ref full-height">
    <form method="post" action="{{url('/test/login')}}">
        {{csrf_field()}}
        用户名：<input type="text" name="username" value="liuqingchen@gm88.com"><br/>
        密码：<input type="password" name="password" value="Zbl123456@"><br/>
        验证码：<input type="text" name="captcha"><br/>
        <img src="{{url('/test/captcha')}}"/>
        <button type="submit" id="test">测试</button>
    </form>
</div>

<script type="text/javascript">

</script>

</body>
</html>
