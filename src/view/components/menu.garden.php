<aside class="menu">
    <div class="items">
        <div class="item profile">
            <img src={{ SERVER_ROOT . "/public/data/" . $user->avatar }} alt="" class="avatar">
            <div class="profile-info">
                <p> {{ $user->name }}<span class="id"><i class="icofont-at"></i>{{ str_pad($user->id, 6, '0', STR_PAD_LEFT) }}</span> </p>
                <p> 
                    <a class="logout" href="{{ SERVER_ROOT }}/leave"> 
                        <i class="icofont-logout default-icon"></i>
                        <i class="icofont-warning-alt hover-icon"></i> 
                        logout 
                    </a> 
                </p>
            </div>
        </div>
        <div class="item buttons">
            <ul>
                <li>
                    <i class="icofont-users"></i>
                    <a href="{{ SERVER_ROOT }}/users">users</a>
                </li>
                <li>
                    <i class="icofont-book-mark"></i>
                    <a href="{{ SERVER_ROOT }}/app">bookmarks</a>
                </li>
                <li>
                    <i class="icofont-plus"></i>
                    <a href="{{ SERVER_ROOT }}/new_bookmark">new bookmark</a>
                </li>
                <li>
                    <i class="icofont-gear"></i>
                    <a href="{{ SERVER_ROOT }}/settings">settings</a>
                </li>
            </ul>
        </div>
    </div>
</aside>