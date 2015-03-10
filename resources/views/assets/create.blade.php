@extends("layout")

@section("content")
<div class="row">
    <div class="medium-6 medium-offset-3 columns">
        <div class="panel">
            <form action="{{ url("assets") }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="medium-12 columns">
                        <label>Type
                            <select>
                                <option value="2d">2D Art</option>
                                <option value="3d">3D Art</option>
                                <option value="music">Music</option>
                                <option value="sfx">Sound FX</option>
                                <option value="plugin">Engine Plugin</option>
                                <option value="project">Godot Project</option>
                                <option value="bundle">Bundle (.zip file, combination of different types)</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-12 columns">
                        <label for="">Name
                            <input type="text" name="name">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-12 columns">
                        <label>Description</label>
                        <textarea rows="4"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-6 columns">
                        <div class="row">
                            <div class="medium-12 columns">
                                <label>Screenshot</label>
                                <input id="screenshot" type="file" name="screenshot">
                            </div>
                        </div>
                        <div class="row">
                            <div class="medium-12 columns">
                                <label>Asset File(s)</label>
                                <input type="file" name="asset">
                            </div>
                        </div>
                    </div>
                    <div class="medium-6 columns">
                        <img id="thumbnail_preview" src="{{ url("images/screenshot-preview.png")}}">
                    </div>
                </div>
                <div class="row">
                    <div class="medium-12 columns">
                        <input type="submit" id="submit-button" class="button large expand" value="Upload Asset">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section("styles")
<link rel="stylesheet" href="{{ URL::to("stylesheets/login.css") }}" />

<style>
    #submit-button {
        margin-top: 15px;
        margin-bottom: 0;
    }
</style>
@stop

@section("scripts")
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#thumbnail_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#screenshot").change(function(){
        readURL(this);
    });
</script>
@stop
