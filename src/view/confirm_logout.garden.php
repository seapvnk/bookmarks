{% components/header %}

<div class="big-space"></div>

{% components/title %}

<div class="confirmation">

    <a href="{{ SERVER_ROOT }}/logout" class="danger">
        
        <i class="icofont-logout default-icon"></i>
        <i class="icofont-warning-alt hover-icon"></i> 
        Yes, i want to leave! 

    </a>

    <a href="{{ SERVER_ROOT }}/app" role="button">:) No, i want to stay.</a>

</div>

{% components/footer %}
