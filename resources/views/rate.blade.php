@extends('layouts.backend', ['user' => $user, 'users' => $users, 'notif' => $notif])

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="" >
            <div style="display:inline-block">
            <img style="width: 100%;" src="{{asset('media/sumtin/desimtas.png')}}">
            <a style="position:absolute;top:<?php echo(430/16);?>rem;left:0;color:red;width:100%;height:<?php echo(80/16);?>rem;" href="{{route('production')}}"></a>
            </div>
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
