{@ 
    $limit = 4;
    $start = ($page - 4) < 1? 1 : $page - 4;
    $end = ($page + 4) > $pages? $pages : $page + 4;
    $link = SERVER_ROOT . "/$route/";
    
    $previous = $link . ($page - 1);
    $next = $link . ($page + 1);
}}

<div class="pages">

    {@ if ($page != 1): }}
        <a class="controller" href="{{ $previous }}"> <i class="icofont-arrow-left"></i> </a>
    {@ endif; }}


    {@  # Display pages

        for ($pagination = $pages - $limit; $pagination <= $pages + $limit ; $pagination++):
        
        if ($pagination <= 0) continue;
        if ($pagination > $pages) break;
    }}

        <a class="link {{ $pagination == $page? 'success' : '' }}" href="{{ $link . $pagination }}">
            {{ $pagination }}
        </a>

    {@ endfor; }}


    {@ if ($page < $pages): }}
        <a class="controller" href="{{ $next }}"> <i class="icofont-arrow-right"></i> </a>
    {@ endif; }}

</div>