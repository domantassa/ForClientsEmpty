@extends('layouts.backend', ['user' => $user, 'users' => $users, 'notif' => $notif])

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="" >
            <img style="width: 100%;" src="{{asset('media/sumtin/antras_puslapis.png')}}">
            <a href="{{ route('search', ['user' => $user]) }}'" class="custom-file-upload btn btn-round btn-primary btn-green " data-toggle="tooltip" data-placement="top" title="Press to submit" >
                                <span style="font-size: 17px;">
                                    <i class="fas fa-upload"></i>
                                </span>    
            </a>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                            <script>
                                $("#file-upload").change(function(){
                                    //alert(1);
                                   $(".file-form").addClass("d-inline-block");
                                   //$("").removeClass("order-btn-grey");
                                  
                                });
                                </script>
            
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <!-- END Page Content -->
@endsection
