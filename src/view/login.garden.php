{% components/meta %}

<header class="login-header">
    <i class="icofont-book-mark"></i>
    <span>bookmarks</span>
</header>

<img class="background-image" src="https://source.unsplash.com/random" alt="">
<svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#23272a" fill-opacity="1" d="M0,192L21.8,186.7C43.6,181,87,171,131,186.7C174.5,203,218,245,262,266.7C305.5,288,349,288,393,245.3C436.4,203,480,117,524,117.3C567.3,117,611,203,655,224C698.2,245,742,203,785,197.3C829.1,192,873,224,916,202.7C960,181,1004,107,1047,101.3C1090.9,96,1135,160,1178,176C1221.8,192,1265,160,1309,165.3C1352.7,171,1396,213,1418,234.7L1440,256L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path>
</svg>

<div class="fullpage">

    <div class="login-form">
        {@ if (isset($notification)): }}
            <div class="notification success">
                <i class="icofont-exclamation-circled"></i>
                <p> {{ $notification }} </p>
            </div>
        {@ endif; }}

        <h1>Welcome back!</h1>
        <h2>Your bookmarks are ready for you!</h2>
        
        <form action="#" method="POST">
            <p class={{ $errors['email']? 'has-error' : '' }}>
                email
                <span>
                    {{ $errors['email'] }}
                </span>
            </p>
            <input type="email" name="email" id="" value="{{ $errors['email_r'] }}">
            <p class={{ $errors['password']? 'has-error' : '' }}>
                password
                <span>
                    {{ $errors['password'] }}
                </span>
            </p>
            <input type="password" name="password" id="">
            <p></p>
            <input class="button-submit" type="submit" value="Login">
            <p class="no-account">
                Need an account? <a href="register">Register</a>
            </p>
        </form>
    </div>

</div>



{% components/footer %}
