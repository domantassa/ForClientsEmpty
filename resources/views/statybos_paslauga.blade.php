@extends('layouts.backend', ['user' => $user, 'users' => $users, 'notif' => $notif])

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="" >
            <div style="display:inline-block">
            <img style="width: 100%;" src="{{asset('media/sumtin/trecias_puslapis.png')}}">
                <a style="position:absolute;top:<?php echo(875/16);?>rem;left:<?php echo(25/16);?>rem;color:red;width:<?php echo(320/16);?>rem;height:<?php echo(40/16);?>rem;" href="{{route('chat')}}"></a>
                <a style="position:absolute;top:<?php echo(2140/16);?>rem;left:<?php echo(25/16);?>rem;color:red;width:<?php echo(320/16);?>rem;height:<?php echo(40/16);?>rem;" href="{{route('chat')}}"></a>
                <a style="position:absolute;top:<?php echo(943/16);?>rem;left:<?php echo(25/16);?>rem;color:red;width:<?php echo(320/16);?>rem;height:<?php echo(40/16);?>rem;" href="{{route('send.sms')}}"></a>
                <a style="position:absolute;top:<?php echo(2212/16);?>rem;left:<?php echo(25/16);?>rem;color:red;width:<?php echo(320/16);?>rem;height:<?php echo(40/16);?>rem;" href="{{route('send.sms')}}"></a>
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
