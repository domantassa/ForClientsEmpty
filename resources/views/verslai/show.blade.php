@extends('layouts.simple')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full pt-2" >
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h2 my-2 invisible" data-toggle="appear"
                data-class="animated fadeInUp"
                data-timeout="250"
                data-offset="-100">
                Mano failai </h1>
            </div>
                
                        <label class="custom-file-upload btn btn-round btn-primary btn-green" for="file-upload" >
                            
                        
                        Prisegti failą
                        
                    </label>
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

                           
                        
                    </div>
                            
                        
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
