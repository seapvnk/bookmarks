{% components/header %}
{% components/title %}

<div class="login-form app-form">
    <form action="#" method="POST" enctype="multipart/form-data">
        <div class="create-avatar">
            <p>profile picture</p>
            <input type="file" accept="image/*" name="avatar" id="avatar">
            <label for="avatar">
                <img src="{{ SERVER_ROOT }}/public/data/{{ $user->avatar }}" id="avatar-preview"/>
            </label>
        </div>

        <p>name</p>
        <input type="text" name="name" id="" value="{{ $user->name }}">

        <p></p>
        <input type="submit" name="save" class="button-submit" value="save changes">

    </form>
</div>
<script src="public/assets/js/imagePreview.js"></script>

{% components/footer %}
