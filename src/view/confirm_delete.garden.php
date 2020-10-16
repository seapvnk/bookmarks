{% components/header %}

<div class="big-space"></div>

{% components/title %}

<div class="confirmation">

    <a href="{{ SERVER_ROOT . "/$link" }}" class="danger">
        Yes, i want to delete!
    </a>
    
    <a href="{{ SERVER_ROOT }}/app" role="button">No, keep it.</a>

</div>

{% components/footer %}
