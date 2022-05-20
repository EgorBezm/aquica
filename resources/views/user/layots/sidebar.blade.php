<<<<<<< HEAD
<link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
=======
<link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
>>>>>>> 4d31e751ec8172c67294172cb95fd48b1ceb6e79
<div class="sidebar">
    <div class="sidebar-user">
    <div class="user-emoji">
        @if(\Illuminate\Support\Facades\Auth::user()['emoji'] == null)
            <img src="{{ asset('images/avatars/avatar1.svg')}}" alt="user">
        @else
            <img src="{{ asset('images/emoji'). '/' . \Illuminate\Support\Facades\Auth::user()['emoji']['url']}}" alt="user">
        @endif
    </div>
            <div class="user-welcome">
                <h4>Hello,</h4>
                <h2>
                    @if(\Illuminate\Support\Facades\Auth::user()['name'] == null)
                        Aquica User
                    @else
                        {{ \Illuminate\Support\Facades\Auth::user()['name'] }}
                    @endif
                </h2>
            </div>
            <a href="{{ route('user') }}" class="user-settings">
                <img src="{{ asset('images/icons/icon-settings.svg')}}" alt="settings">
            </a>
    </div>
    <div class="sidebar-nav">
        <div class="navbuttons">
            <a href="{{ route('home') }}"
               class="sidebar_button @if($page == 'home') sidebar_button_active @endif"
            >
                <div class="sidebar-button__left">
                    <img src="{{ asset('images/icons/icon-community.svg')}}" alt="nav-community">
                    <h4>Community</h4>
                </div>
                <img src="{{ asset('images/icons/icon-menu.svg')}}" alt="nav-menu">
<<<<<<< HEAD
            </button>
            <button class="sidebar_button">
=======
            </a>
            <a href="{{ route('storage') }}"
               class="sidebar_button @if($page == 'storage') sidebar_button_active @endif"
            >
>>>>>>> 4d31e751ec8172c67294172cb95fd48b1ceb6e79
                <div class="sidebar-button__left">
                    <img src="{{ asset('images/icons/icon-hard-drive.svg')}}" alt="nav-storage">
                    <h4>Storage</h4>
                </div>
                <img src="{{ asset('images/icons/icon-menu.svg')}}" alt="nav-menu">
<<<<<<< HEAD
            </button>
            <button class="sidebar_button">
                <div class="sidebar-button__left">
                    <img src="{{ asset('images/icons/icon-admin-panel.svg')}}" alt="nav-admin-panel">
                    <h4>Admin Panel</h4>
                </div>
                <img src="{{ asset('images/icons/icon-menu.svg')}}" alt="nav-menu">
            </button>
=======
            </a>
            @if(\Illuminate\Support\Facades\Auth::user()['admin'])
                <a href="{{ route('admin') }}"
                   class="sidebar_button @if($page == 'admin') sidebar_button_active @endif"
                >
                    <div class="sidebar-button__left">
                        <img src="{{ asset('images/icons/icon-admin-panel.svg')}}" alt="nav-admin-panel">
                        <h4>Admin Panel</h4>
                    </div>
                    <img src="{{ asset('images/icons/icon-menu.svg')}}" alt="nav-menu">
                </a>
            @endif
>>>>>>> 4d31e751ec8172c67294172cb95fd48b1ceb6e79
        </div>
    </div>
    <div class="sidebar-content_title" id="friendButton">
            <h5>FRIENDS</h5>
            <img src="{{ asset('images/icons/icon-arrow-up.svg')}}" alt="nav-menu" class="friend-button__img" id="friendButtonImg">
        </div>
    <div class="sidebar-content" id="friend">
        @forelse(\Illuminate\Support\Facades\Auth::user()['friends'] as $friend)
            <div class="sidebar-content__block">
                <div class="content-block_elem1">
                    <div class="user-content_left">
                        <div class="user-avatar">
                            <img src="{{ asset('images/avatars/avatar2.svg')}}" alt="user">
                        </div>
                        <div class="user-name">
                            <h4>Robert Plant</h4>
                            <div class="user1-post_images">
                                <img src="{{ asset('images/sidebar posts/Image1.svg')}}" alt="user1-img1">
                                <img src="{{ asset('images/sidebar posts/Image2.svg')}}" alt="user1-img2">
                                <img src="{{ asset('images/sidebar posts/Image3.svg')}}" alt="user1-img3">
                                <p>+6 more</p>
                            </div>
                        </div>
                    </div>
                    <div class="user-content_right">
                        <p>Now</p>
                        <div class="sidebar-counter_right">
                            <h5>4</h5>
                        </div>
                    </div>
                </div>
            </div>
        @empty

        @endforelse
{{--        <div class="sidebar-content__block">--}}
{{--            <div class="content-block_elem1">--}}
{{--                <div class="user-content_left">--}}
{{--                    <div class="user-avatar">--}}
{{--                        <img src="{{ asset('images/avatars/avatar3.svg')}}" alt="user">--}}
{{--                    </div>--}}
{{--                    <div class="user-name">--}}
{{--                        <h4>Bon Scott</h4>--}}
{{--                        <div class="user1-post_images">--}}
{{--                            <img src="{{ asset('images/sidebar posts/Image1.svg')}}" alt="user1-img1">--}}
{{--                            <img src="{{ asset('images/sidebar posts/Image2.svg')}}" alt="user1-img2">--}}
{{--                            <img src="{{ asset('images/sidebar posts/Image3.svg')}}" alt="user1-img3">--}}
{{--                            <p>+6 more</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="user-content_right">--}}
{{--                    <p>Now</p>--}}
{{--                    <div class="sidebar-counter_right">--}}
{{--                        <h5>4</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="sidebar-content__block">--}}
{{--            <div class="content-block_elem1">--}}
{{--                <div class="user-content_left">--}}
{{--                    <div class="user-avatar">--}}
{{--                        <img src="{{ asset('images/avatars/avatar4.svg')}}" alt="user">--}}
{{--                    </div>--}}
{{--                    <div class="user-name">--}}
{{--                        <h4>Angus Young</h4>--}}
{{--                        <div class="user1-post_images">--}}
{{--                            <img src="{{ asset('images/sidebar posts/Image1.svg')}}" alt="user1-img1">--}}
{{--                            <img src="{{ asset('images/sidebar posts/Image2.svg')}}" alt="user1-img2">--}}
{{--                            <img src="{{ asset('images/sidebar posts/Image3.svg')}}" alt="user1-img3">--}}
{{--                            <p>+6 more</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="user-content_right">--}}
{{--                    <p>Now</p>--}}
{{--                    <div class="sidebar-counter_right">--}}
{{--                        <h5>4</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="sidebar-content__block">--}}
{{--        <div class="content-block_elem1">--}}
{{--                <div class="user-content_left">--}}
{{--                    <div class="user-avatar">--}}
{{--                        <img src="{{ asset('images/avatars/avatar5.svg')}}" alt="user">--}}
{{--                    </div>--}}
{{--                    <div class="user-name">--}}
{{--                        <h4>Fiona Gallagher</h4>--}}
{{--                        <div class="user1-post_images">--}}
{{--                            <img src="{{ asset('images/sidebar posts/Image1.svg')}}" alt="user1-img1">--}}
{{--                            <img src="{{ asset('images/sidebar posts/Image2.svg')}}" alt="user1-img2">--}}
{{--                            <img src="{{ asset('images/sidebar posts/Image3.svg')}}" alt="user1-img3">--}}
{{--                            <p>+6 more</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="user-content_right">--}}
{{--                    <p>Now</p>--}}
{{--                    <div class="sidebar-counter_right">--}}
{{--                        <h5>4</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="sidebar-content__block">--}}
{{--        <div class="content-block_elem1">--}}
{{--                <div class="user-content_left">--}}
{{--                    <div class="user-avatar">--}}
{{--                        <img src="{{ asset('images/avatars/avatar6.svg')}}" alt="user">--}}
{{--                    </div>--}}
{{--                    <div class="user-name">--}}
{{--                        <h4>Ozzy osbourne</h4>--}}
{{--                        <div class="user1-post_images">--}}
{{--                            <img src="{{ asset('images/sidebar posts/Image1.svg')}}" alt="user1-img1">--}}
{{--                            <img src="{{ asset('images/sidebar posts/Image2.svg')}}" alt="user1-img2">--}}
{{--                            <img src="{{ asset('images/sidebar posts/Image3.svg')}}" alt="user1-img3">--}}
{{--                            <p>+6 more</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="user-content_right">--}}
{{--                    <p>Now</p>--}}
{{--                    <div class="sidebar-counter_right">--}}
{{--                        <h5>4</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <button class="sidebar-addfriends_button">
            <img src="{{ asset('images/icons/icon-addfriends.svg')}}" alt="icon-addfriends">
            <h4>Add Friends</h4>
        </button>
    <div class="sidebar-signout"
         onclick="document.getElementById('logout-form').submit();"
    >
        <div class="sidebar-signout_button">
            <img src="{{ asset('images/icons/icon-log-out.svg')}}" alt="nav-log-out">
            <p>Sign Out</p>
        </div>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>

<script src="{{ asset('js/sidebar.js') }}"></script>
