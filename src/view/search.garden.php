{% components/header %}
{% components/title %}

{@ if (!$userFound): }}

    <div class="login-form app-form">
        <form action="#" method="POST">
            <p>id</p>
            <input type="text" name="id">

            <p></p>
            <input type="submit" name="search" class="button-submit" value="search">
        </form>
    </div>

{@ else: }}

    <div class="profile">
        <div class="avatar">
            <img src="{{ SERVER_ROOT }}/public/data/{{ $userSearch->avatar }}" id="avatar-preview"/>
        </div>
        
        <h2>
            {{ $userSearch->name }}
            <span class="primary">
            <i class="icofont-at"></i>
            {{ str_pad($userSearch->id, 6, '0', STR_PAD_LEFT) }}
        </h2>
    </div>
    {% components/user_bookmarks %}

{@ endif; }}
{% components/footer %}
