@extends('layouts.backend', ['user' => $user, 'users' => $users, 'notif' => $notif])

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="" >
            <div style="display:inline-block">
                <img style="width: 100%;" src="{{asset('media/sumtin/pirmas_puslapis.png')}}">
                <a style="position:absolute;top:<?php echo(220/16);?>rem;left:<?php echo(25/16);?>rem;color:red;width:<?php echo(320/16);?>rem;height:<?php echo(40/16);?>rem;" href="{{route('paslaugu_listas')}}"></a>
            </div>
            <div style="display:inline-block">
                <a style="position:absolute;top:<?php echo(275/16);?>rem;left:<?php echo(25/16);?>rem;color:red;width:<?php echo(320/16);?>rem;height:<?php echo(40/16);?>rem;" href="{{route('forma_photo')}}"></a>
            </div>
            <div style="display:inline-block">
                <a style="position:absolute;top:<?php echo(1540/16);?>rem;left:<?php echo(25/16);?>rem;color:red;width:<?php echo(320/16);?>rem;height:<?php echo(40/16);?>rem;" href="{{route('statybos_paslauga')}}"></a>
            </div>
            <div style="display:inline-block">
                <a style="position:absolute;top:<?php echo(1780/16);?>rem;left:<?php echo(25/16);?>rem;color:red;width:<?php echo(320/16);?>rem;height:<?php echo(40/16);?>rem;" href="{{route('search')}}"></a>
            </div>
                    <form action="{{ route('upload', ['user' => $user]) }}" method="post" role="form" class="file-form" enctype="multipart/form-data">
                             @csrf    
                             <!--
                            <label for="file-upload" class="custom-file-upload border-0" data-toggle="tooltip" data-placement="top" title="Press to upload a file">
                                <span style="font-size: 16px; color: Dodgerred;">
                                    <i class="fas fa-file mt-1"></i>
                                </span>    
                                
                            </label>
                            -->
                            <input id="file-upload" type="file" name="file" />
                            <button type="submit" class="custom-file-upload btn btn-round btn-primary btn-green " data-toggle="tooltip" data-placement="top" title="Press to submit" >
                                <span style="font-size: 17px;">
                                    <i class="fas fa-upload"></i>
                                </span>    
                            </button>
                        </form>
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
