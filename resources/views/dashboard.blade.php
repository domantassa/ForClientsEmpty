@extends('layouts.backend', ['user' => $user, 'users' => $users, 'notif' => $notif])

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="" >
            <img style="width: 100%;" src="{{asset('media/photos/headerbanner.PNG')}}">
            <img style="width: 100%;" src="{{asset('media/photos/antra.PNG')}}">
            <img style="width: 100%;" src="{{asset('media/photos/headerbanner.PNG')}}">
            <img style="width: 100%;" src="{{asset('media/photos/headerbanner.PNG')}}">
            <img style="width: 100%;" src="{{asset('media/photos/headerbanner.PNG')}}">
            <img style="width: 100%;" src="{{asset('media/photos/headerbanner.PNG')}}">
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
                            <button type="submit" class="file-custom btn " data-toggle="tooltip" data-placement="top" title="Press to submit" >
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


    <div class="contentShadowInset">
        
        <div class="row justify-content-center dashboardas">
            
            <div class="col-md-12 col-xl-12">
            <div class="col-12 " style="padding-left:1.875rem">
            <table>
                <tbody>
                        @foreach ($files->where('order_id',null) as $file)
                            
                           <tr>
                            
                                <td style="width:100%"><div  class=" col btn-round btn-grey mr-2" style="text-align:left">{{$file->name}}</div></td>
                                <td style="width:100px"><a href="{{route('download',$file->id)}}"><div  class=" btn btn-round btn-primary btn-green">Parsisiusti</div></a></td>
                                <td  style="width:30px"><div  class="  btn-round btn-trash"><a href="{{ route('deleteFile', ['file' => $file->id]) }}"><i class="fa fa-trash trash"></i></a></div></td>
                            
                            </tr>
                            @endforeach
                </tbody>
            </table>
            </div>
                
                <div class=" {{ $files->count() ? 'blockWithTopMargin' : '' }}">

                    <div class="block-content">
                        <p class="font-size-sm text-muted">
                            
                        </p>
                        <p class="font-size-sm text-muted">
                             <strong></strong>
                        </p>

                        <form action="{{ route('upload', ['user' => $user]) }}" method="post" role="form" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" id="file" aria-label="File browser example">
                            
                            
                        </form>

                        <div class="text-center">

                        @if ($files->first() && Auth::user()->position == 'admin')

                        <form action="{{ route('deleteDir', ['user' => $user]) }}">
                            <input type="submit" class="btn btn-primary" value="Delete all" />
                            
                        </form>
                        @endif 
                           
                        
                    </div>
                            
                        
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
