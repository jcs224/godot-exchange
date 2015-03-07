<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Godot Exchange</title>
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ url("stylesheets/app.css") }}" />
    <link rel="stylesheet" href="{{ url("stylesheets/foundation-icons/foundation-icons.css") }}" />
    @yield("styles")
    <script src="{{ url("bower_components/modernizr/modernizr.js") }}"></script>
</head>
<body>
    <div class="contain-to-grid">
        <nav id="top-bar" class="top-bar" data-topbar role="navigation">
            <ul class="title-area">
                <li class="name">
                    <h1><a href="{{ url("/") }}">Godot Exchange</a></h1>
                </li>
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>

            <section class="top-bar-section">
                <ul class="right">
                    <li><a href="{{ url("auth/register") }}"><i class="fi-clipboard-pencil"></i> Register</a></li>
                    <li><a href="{{ url("auth/login") }}"><i class="fi-arrow-right"></i> Log In</a></li>
                </ul>

                <ul class="left">
                    <li><a href="#">Assets</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Learn</a></li>
                    <li class="has-form">
                        <div class="row collapse">
                            <div class="large-8 small-9 columns">
                                <input type="text">
                            </div>
                            <div class="large-4 small-3 columns">
                                <a id="search-button" href="#" class="button expand">Search</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
        </nav>
    </div>
    
    <div class="row">
        <div class="large-12 columns">
            @yield("content")
        </div>
    </div>
    
    <div id="footer">
        <div class="row">
            <div class="large-12 columns">
                <p>&COPY;{{ date('Y') }} Godot Exchange. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    
    <script src="{{ url("bower_components/jquery/dist/jquery.min.js") }}"></script>
    <script src="{{ url("bower_components/foundation/js/foundation.min.js") }}"></script>
    <script src="{{ url("js/app.js") }}"></script>
    
    @yield("scripts")
</body>
</html>