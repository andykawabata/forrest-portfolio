<header>
    <div class="header-content clearfix">
        <a href="/"><div class="logo"><img src="{{asset('static-img/fj.png')}}"></div></a>
        <div id="artist">
            <a href="/">
                <h1 class="menu-text">Forrest Joss</h1>
                <h4 class="menu-text">Visual Artist</h4>
            </a>
        </div>
        <nav>
            <ul>
                <li class="sub-menu">
                    <a id="work" href="{{route('default_album', ['album_name' => 'drawings'])}}">WORK</a>
                    <!--<ul sytle="display: none">
                        <li><a href="#">Drawing</a></li>
                        <li><a href="#">Printmaking</a></li>
                        <li><a href="#">Sculpture</a></li>
                    </ul>
                -->
                </li>
                <li><a id="about" href="{{route('about')}}">ABOUT</a></li>
                <li><a id="contact" href="{{route('contact')}}">CONTACT</a></li>
            </ul>
        </nav>
        <div id="menu-toggle"><i class="fa fa-bars " style="transform: scale(1.5,1.5);"></i></div>
    </div>
</header>

