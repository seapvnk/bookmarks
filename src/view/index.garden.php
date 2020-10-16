{% components/header %}
{% components/title %}

{@ if ($bookmarks && count($bookmarks) > 0): }}

    <div class="bookmarks">
        {@ if (isset($notification)): }}
            <div class="notification {{ $notification['type'] }}">
                <i class="icofont-exclamation-circled"></i>
                <p> {{ $notification['message'] }} </p>
            </div>
        {@ endif; }}

        {@ foreach ($bookmarks as $bookmark): }}
            <div class="bookmark">
                <div class="content">
                    <a href="{{ $bookmark->link }}" target="_blank">
                        <i  style="color: {{ $bookmark->color }}" class="icofont-link-alt"></i>
                    </a>
                    <div class="info">
                        <span>  {{ $bookmark->name }}</span>
                        
                        <span class="tag">  {{ $bookmark->tag }} </span>
                    </div>
                    <a class="danger" href="{{ SERVER_ROOT }}/confirm_delete/{{ $bookmark->id }}">
                        <i class="icofont-close-line-circled"></i>
                    </a>
                </div>
            </div>
        {@ endforeach; }}
    </div>

    {% components/pagination %}

{@ elseif (!$bookmarks && $noBookmarks): }}

    {@ # If no bookmarks to display }}
    <h1 class="no-bookmark">you don't have any bookmark</h1>
    <div class="no-bookmark-button-container">
        <a href="{{ SERVER_ROOT }}/new_bookmark">add bookmark</a>
    </div>

{@ else: }}

    {@ # If trying to access by URL an inexistent page  }}
    <h1 class="no-bookmark">Inexistent page</h1>
    <div class="no-bookmark-button-container">
        <a href="{{ SERVER_ROOT }}/bookmarks">return to first page</a>
    </div>

{@ endif; }}
{% components/footer %}
