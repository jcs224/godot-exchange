@extends("layout")

@section("content")
<div class="row">
    <div class="show-for-large-up">
        <div class="medium-4 columns">
            <img src="images/godot_logo.jpg">
        </div>
    </div>

    <div id="banner-column-2-id" class="large-8 medium-12 columns">
        <h1>The #1 community resource for the Godot game engine.</h1>
        <ul class="feature-list">
            <li><i class="fi-check"></i> Engine Plugins</li>
            <li><i class="fi-check"></i> Assets (2D/3D art, SFX/music, etc.)</li>
            <li><i class="fi-check"></i> Project files</li>
            <li><i class="fi-check"></i> Tutorials</li>
            <li><i class="fi-check"></i> Latest engine binaries</li>
            <li><i class="fi-check"></i> ... and much more! Take a look!</li>
        </ul>
        <div id="banner-buttons">
            <a href="#" class="button large">Browse files</a>
            <a href="#" class="button large">Register</a>
        </div>
    </div>
</div>
@stop