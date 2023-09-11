<div class="{{$viewClass['form-group']}}">

    <label class="{{$viewClass['label']}} control-label">{!! $label !!}</label>

    <div class="{{$viewClass['field']}} shadow-100">

        @include('admin::form.error')

        <canvas {{$class}} {!! $attributes !!} {{$name}} width="{{$options['width']}}" height="{{$options['height']}}"></canvas>
        <!-- <input type="hidden" name="{{$name}}" value="" /> -->
        
        @include('admin::form.help-block')

    </div>
</div>

<script require="@mikha.dev.fabricjs" init="{!! $selector !!}">
    /*var options = {!! admin_javascript_json($options) !!}; */

/*    options = $.extend({
        callbacks: {
            onChange: function(contents, $editable) {
                $('input[name="{{$name}}"]').val(contents);
            },
            onInit: function() {
             $('input[name="{{$name}}"]').val($('#'+id).summernote('code'));
            }
        }
    }, options); */

    var canvas = new fabric.Canvas(id);

    $('input[name="png_template_file"]').change = function(e) {

        alert(e);
        canvas.setBackgroundImage(e, canvas.renderAll.bind(canvas));
    }    
    canvas.setBackgroundImage('{{$bg_image}}', canvas.renderAll.bind(canvas));
    canvas.loadFromJSON('{!!$value!!}', canvas.renderAll.bind(canvas));
    
</script>
