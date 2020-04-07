<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/css.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->
        <br>
        <!-- Icon -->
        <div class="fadeIn first">
            <img src="https://avatars3.githubusercontent.com/u/19829219?s=200&v=4" style="width:128px; height:128px;" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form method="post">
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="login"
                   value="{{$login}}">
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="password" 
                   value="{{$password}}">
            <input type="submit" class="fadeIn fourth" name="buttonlogin" value="Log In">
        </form>
        @if(validationOne()->messageList->firstErrorText())
            <div class="alert alert-danger" role="alert">
                {!! validationOne()->messageList->firstErrorText() !!}
            </div>
        @endif()



    </div>
</div>