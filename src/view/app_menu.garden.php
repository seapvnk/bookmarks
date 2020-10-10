<aside class="menu">
    <div class="items">
        <div class="item profile">
            <img src={{ "public/data/" . $user->avatar }} alt="" class="avatar">
            <div class="profile-info">
                <p> {{ $user->name }}<span class="id"><i class="icofont-at"></i>{{ str_pad($user->id, 6, '0', STR_PAD_LEFT) }}</span> </p>
                <p> 
                    <a class="logout" href="leave"> 
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
                    <i class="icofont-globe"></i>
                    <a href="">search</a>
                </li>
                <li>
                    <i class="icofont-users"></i>
                    <a href="">following</a>
                </li>
                <li>
                    <i class="icofont-book-mark"></i>
                    <a href="">bookmarks</a>
                </li>
                <li>
                    <i class="icofont-gear"></i>
                    <a href="">settings</a>
                </li>
            </ul>
        </div>
    </div>
</aside>