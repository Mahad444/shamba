@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('form_ui/css/Beautiful-Contact-from-animated.css')}}">
</head>

<body>
    <div class="container container-contact100">
        <div class="wrap-contact100">
            <form method="POST" action="{{route('animal.update',$animal->id)}}" class="contact100-form validate-form">
                @csrf
                @method('PUT')
                <span class="contact100-form-title">Enter Animal Data</span>
                
                <label for="name" class="contact100-form-label">{{_('name')}}</label>
                <div class="wrap-input100 validate-input" data-validate="Please enter your name">
                    <input class="form-control input100 @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{$animal->name}}" placeholder="Enter Animal's breed" autocomplete="name" autofocus required>
                    @error('name')
                    <span class="focus-input100 invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <label for="crop_duration" class="contact100-form-label">{{_('quantity')}}</label>
                <div class="wrap-input100 validate-input " data-validate="Crop Duration in Number of Days">
                    <input class="form-control input100 @error('quantity') is-invalid @enderror" id="quantity" type="number" name="quantity" value="{{$animal->quantity}}" placeholder="The number of animals you have" autocomplete="quantity" autofocus required>
                    @error('quantity')
                    <span class="focus-input100 invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <label for="farmers_note" class="contact100-form-label">{{_('farmers_note')}}</label>
                <div class="wrap-input100 validate-input" data-validate="Please enter a farmers note about your animal">
                    <textarea class="form-control input100" name="farmers_note" placeholder="Your farmers_note" row="10">
                        {{$animal->farmers_note}}
                    </textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="btn btn-primary contact100-form-btn" type="submit">
                        <span>Update Record &nbsp;<i class="fa fa-star fa fa-paper-plane-o m-r-6" aria-hidden="true"></i></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('form_ui/js/Beautiful-Contact-from-animated-script.js')}}"></script>
</body>

</html>
@endsection