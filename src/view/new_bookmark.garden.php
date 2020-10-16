{% components/header %}
{% components/title %}

<div class="app-form login-form">
    
    {@ # Render notification  }}
    {@ if (isset($notification)): }}
        <div style="margin-top: -15px" class="notification success">
            <i class="icofont-exclamation-circled"></i>
            <p> {{ $notification }} </p>
        </div>
    {@ endif; }}
    
    {@ # Render form  }}
    {% components/form/bookmark %}
    
</div>

{% components/footer %}
