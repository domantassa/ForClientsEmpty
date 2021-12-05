@extends('layouts.backend', ['user' => $user, 'users' => $users, 'notif' => $notif])

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="" >
            <div style="display:inline-block">
                <img style="width: 100%;" src="{{asset('media/sumtin/pirmas_puslapis.png')}}">
                <a style="position:absolute;top:<?php echo(200/16);?>rem;left:0;?>rem;color:red;width:100%;height:<?php echo(60/16);?>rem;" href="{{route('paslaugu_listas')}}"></a>
                <a style="position:absolute;top:<?php echo(275/16);?>rem;left:0;color:red;width:100%;height:<?php echo(60/16);?>rem;" href="{{route('forma_photo')}}"></a>
                <a style="position:absolute;top:<?php echo(1500/16);?>rem;left:0;color:red;width:100%;height:<?php echo(80/16);?>rem;" href="{{route('statybos_paslauga')}}"></a>
                <a style="position:absolute;top:<?php echo(1740/16);?>rem;left:0;color:red;width:100%;height:<?php echo(80/16);?>rem;" href="{{route('search')}}"></a>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->

    <!-- END Page Content -->
@endsection
