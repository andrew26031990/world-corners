<div class="form-group col-sm-6">
    @if(isset($location->id))
        {!! Form::label('select_field', 'Подкатегория:') !!}
        {!! Form::select('menu_id', $allMenu, $location->menu_id, ['class' => 'form-control']) !!}
    @else
        {!! Form::label('select_field', 'Подкатегория:') !!}
        {!! Form::select('menu_id', $allMenu, null, ['class' => 'form-control']) !!}
    @endif
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Название локации:') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Keywords Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keywords', 'Ключевые слова (SEO):') !!}
    {!! Form::text('keywords', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Описание (SEO):') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Text Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('text', 'Text:') !!}
    {!! Form::textarea('text', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Short Text Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('short_text', 'Short Text:') !!}
    {!! Form::textarea('short_text', null, ['class' => 'form-control', 'required', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Latitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latitude', 'Широта:') !!}
    {!! Form::text('latitude', null, ['class' => 'form-control', 'required', 'readonly']) !!}
</div>

<!-- Longitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('longitude', 'Долгота:') !!}
    {!! Form::text('longitude', null, ['class' => 'form-control', 'required', 'readonly']) !!}
</div>

<div class="form-group col-sm-12">
    <div id="map" style="width: 100%; height: 400px;"></div>
</div>

<!-- Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img', 'Картинка локации:') !!}
    {!! Form::file('img', null, ['class' => 'form-control', 'type' => 'file']) !!}
</div>

<script>
    ymaps.ready(function () {
        var map = new ymaps.Map('map', {
            center: [{{$location->latitude ?? '55.755814'}}, {{$location->longitude ?? '37.617635'}}],
            zoom: 15
        });

        map.events.add('wheel', function (e) {
            if (!e.get('ctrlKey')) {
                e.preventDefault();
            }
        });

        map.events.add('click', function (e) {
            var coords = e.get('coords');

            ymaps.geocode(coords).then(function (result) {
                var firstGeoObject = result.geoObjects.get(0);
                document.getElementById('title').value = firstGeoObject.getAddressLine();
            });
            document.getElementById('latitude').value = coords[0];
            document.getElementById('longitude').value = coords[1];
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#text').summernote();
    });
    /*ClassicEditor
        .create( document.querySelector( '#text' ), {
            toolbar: [
                'heading', '|', 'bold', 'italic', '|',
                'bulletedList', 'numberedList', '|',
                'imageUpload', 'mediaEmbed', 'link', 'blockQuote', 'insertTable', '|',
                'undo', 'redo', 'ckfinder'
            ],
            image: {
                toolbar: [ 'imageTextAlternative', 'imageStyle:full', 'imageStyle:side' ],
                styles: [
                    'full', // изображение займет всю ширину
                    'side'  // изображение будет обтекаться текстом
                ]
            },
            alignment: {
                options: [ 'left', 'right', 'center', 'justify' ]
            }
        })
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );*/
</script>
