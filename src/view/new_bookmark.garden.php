{% components/header %}

{% components/title %}

<div class="app-form login-form">
    {@ if (isset($notification)): }}
        <div style="margin-top: -15px" class="notification success">
            <i class="icofont-exclamation-circled"></i>
            <p> {{ $notification }} </p>
        </div>
    {@ endif; }}
    <form action="#" method="POST">
        
        <p class={{ $errors['name']? 'has-error' : '' }}>
            name
            <span>
                {{ $errors['name'] }}
            </span>
        </p>
        <input type="text" name="name" id="" value="{{ $errors['name'] }}">

        <p class={{ $errors['link']? 'has-error' : '' }}>
            link
            <span>
                {{ $errors['link'] }}
            </span>
        </p>
        <input type="text" name="link" id="" value="{{ $errors['link'] }}">

        <p class={{ $errors['tag']? 'has-error' : '' }}>
            tag
            <span>
                {{ $errors['tag'] }}
            </span>
        </p>
        <input type="text" name="tag" id="" value="{{ $errors['tag'] }}">

        <p class={{ $errors['color']? 'has-error' : '' }}>
            color
            <span>
                {{ $errors['color'] }}
            </span>
        </p>
        <input type="color" name="color" id="" value="{{ $errors['color'] }}">
        
        <p></p>
        <input type="submit" class="button-submit" name="submit" id="" value="create bookmark">
    </form>
    
</div>

{% components/footer %}
