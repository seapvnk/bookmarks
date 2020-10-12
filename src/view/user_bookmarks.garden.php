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
                </div>
            </div>
        {@ endforeach; }}
    </div>
    <div class="pages">
        {@ if ($page != 1): }}
            <a class="controller" href="{{ SERVER_ROOT }}/users/{{ $userSearch->id }}/{{ $page - 1 }}"><i class="icofont-arrow-left"></i></a>
        {@ endif; }}

        {@ 
            $limit = 4;
            $start = ($page - 4) < 1? 1 : $page - 4;
            $end = ($page + 4) > $pages? $pages : $page + 4;
            for ($pagination = $pages - $limit; $pagination <= $pages + $limit ; $pagination++):
            if ($pagination <= 0) continue;
            if ($pagination > $pages) break;
        }}

            <a 
                class="link {{ $pagination == $page? 'success' : '' }}" 
                href="{{ SERVER_ROOT }}/users/{{ $userSearch->id }}/{{ $pagination }}"
            >
                {{ $pagination }}
            </a>

        {@ endfor; }}


        {@ if ($page < $pages): }}
            <a class="controller" href="{{ SERVER_ROOT }}/users/{{ $userSearch->id }}/{{ $page + 1 }}"><i class="icofont-arrow-right"></i></a>
        {@ endif; }}
    </div>

{@ elseif (!$bookmarks): }}
    <h1 class="no-bookmark">{{ $userSearch->name }} have no bookmarks</h1>
{@ else: }}
    <h1 class="no-bookmark">{{ $userSearch->name }} have no bookmarks</h1>
{@ endif; }}