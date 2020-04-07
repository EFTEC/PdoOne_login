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
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Full name</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr><td>{{$user['userid']}}</td><td>{{$user['fullname']}}</td></tr>
            @endforeach
            </tbody>
        </table>
        <form method="post" action="logout.php">
            <input type="submit" class="fadeIn fourth" name="buttonlogin" value="Log Out">
        </form>



    </div>
</div>