<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cinema</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div class="container" id="app">
    <br>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <label for="film">Films</label>
                <select name="film" class="form-control" v-bind:disabled="disabledWhenSelected" v-model="film"
                        v-on:change="GetActors()">
                    <option value="">Film</option>
                    @if(isset($films))
                        @foreach($films as $film)
                            <option value="{{$film->film_id}}">{{$film->title}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group">
                <label for="actor">Actors</label>
                <div class="alert alert-danger" v-show="!showActor"> there is no actors for this film</div>
                <select name="" id="actor" class="form-control" v-show="showActor">
                    <option v-for="actor in actors" value="">@{{ actor.first_name }}</option>

                </select>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.3.5"></script>
<script src="/js/main.js"></script>

</body>
</html>
