<header>
        <button class="btn btn-white btn-share ml-auto mr-3 ml-md-0 mr-md-auto"><img src="assets/images/share.svg" alt="share" class="btn-img">
            SHARE</button>
        <nav class="collapsible-nav" id="collapsible-nav">
            <a href="/" class="nav-link {{ (request()->is('/')) ? ' active' : 'not' }}">HOME</a>
            <a href="/resume" class="nav-link {{ (request()->is('resume')) ? ' active' : 'not' }}">RESUME</a>
            <a href="/portfolio" class="nav-link {{ (request()->is('portfolio')) ? ' active' : 'not' }}">PORTFOLIO</a>
            <a href="/blog" class="nav-link {{ (request()->is('blog')) ? ' active' : 'not' }}">BLOG</a>
            <a href="/contact" class="nav-link {{ (request()->is('contact')) ? ' active' : 'not' }}">CONTACT</a>
        </nav>
        <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav"
            data-target="collapsible-nav"><img src="{{ asset('assets/images/hamburger.svg') }}" alt="hamburger"></button>
    </header>