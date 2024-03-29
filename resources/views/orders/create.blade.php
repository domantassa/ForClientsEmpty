@extends('layouts.backend', ['user' => $user, 'users' => $users, 'notif' => $notif])

@section('content')
    <!-- Hero -->
    
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2 invisible" data-toggle="appear"
                data-class="animated fadeInUp"
                data-timeout="250"
                data-offset="-100">
                Užsakymo forma </h1>
               
            
            </div>
                            
            <!-- parsisiųsti pavyzdį
            <label class="custom-file-upload btn btn-round btn-primary btn-green" >    
                <input type="file"/>
                Parsisiųsti pavyzdį
            </label>
            -->
                
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="contentShadowInset">
        <div class="row justify-content-center dashboardas">
        <div class="col-md-12 col-xl-12">
            <div class="col-12 " style="padding-left:1.875rem">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


                      
                        <form  action="{{route('orders.store')}}" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="custom-form-group">
                            <h1 class="h4 m-0">1. Užsakymo pavadinimas</h1>
                                <input type="text" placeholder="Pavadinimas" name="title" class=" btn-round order-btn-grey form-btn form-btn2" >
                        </div>  
                        <div class="custom-form-group">
                            <h1 class="h4 m-0">2. Pasirinkite užsakymo tipą</h1>
                            <select name="type" class=" minimal btn-round order-btn-grey form-btn form-btn2" style="width:auto" >
                            
                            <option> Soc. medijų baneris</option >   
                            <option> Vizitinė kortelė</option >
                                <option> Nuolaidų kuponas</option >
                                <option> Lankstinukas</option >   
                            <option> Prezentacija</option >
                                <option> Kvietimas</option >
                                <option> Ikona</option >   
                            <option> Nuotraukų redagavimas</option >
                                <option> FB, IG Story dizainas</option >
                                <option> Lauko reklama</option >   
                            <option> Lipdukas</option >
                                <option> Pakuočių dizainas</option >
                                <option> Skrajutės</option >   
                            <option> Marškinėlių dizainas</option >
                                <option> Infografika</option >
                                <option> Sąs. faktūrų dizainas</option >
                                <option> Etiketė</option >



                            </select>
                        </div>
                        
                        <div class="custom-form-group">
                            <h1 class="h4 m-0">3. Kas turi matytis galutiniame rezultate :</h1>
                            <textarea name="result" rows="6" class=" btn-round order-btn-grey form-btn form-btn2" placeholder="Pradėti rašyti"></textarea>
                        </div>
                        <div class="custom-form-group">
                            <h1 class="h4 m-0">4. Darbo reikalavimai :</h1>
                            <textarea rows="6" name="requirements" class=" btn-round order-btn-grey form-btn form-btn2" placeholder="Pradėti rašyti"></textarea>
                        </div>
                        <div class="custom-form-group">
                            <h1 class="h4 m-0">5. Reikalingi failai / pavyzdžiai :</h1>
                        <input type="file" name="files[]" id="fileToUpload" multiple><label for="fileToUpload" id="label-fileToUpload" class="btn btn-round order-btn-grey form-btn form-btn2" style="width:auto"><diva id="btn-text" >Prisegti failus </diva>
                        <i class="fas fa-check-circle file-form"></i></label><div class="  btn-round btn-trash file-input-trash hide pointer"><i class="fa fa-trash trash"></i></div>
                        </div>
                        
                        <script>

                            </script>
                        <div class="custom-form-group">
                            <h1 class="h4 m-0">6. Papildomi komentarai :</h1>
                            <textarea rows="3" name="feedback" class=" btn-round order-btn-grey form-btn " placeholder="Pradėti rašyti"></textarea>
                        </div>

                        <input type="submit" value="Siųsti užklausą" class="mt-2 btn btn-green btn-primary btn-round">

                    <script>


                    </script>    
                </form>
                        <script>
                            $('form').submit(function(){
                                //alert(1);
                                    $b=false;
                                        //return false;
                                        $('input.form-btn').each(function(){
                                           
                                            if($(this).val() == "")
                                            {
                                                $b=true;
                                                $(this).addClass('invalid');
                                            }
                                        });
                                        $('textarea.form-btn2').each(function(){
                                           
                                           if($(this).val() == "")
                                           {
                                               $b=true;
                                               $(this).addClass('invalid');
                                           }
                                       });
                                    if($b){
                                        return false;
                                    }
                            });
                            $('input.form-btn').change(function(){

                                               $(this).removeClass('invalid');        
                                       });
                            $('textarea.form-btn2').change(function(){
                                               $(this).removeClass('invalid');
                            });
                            </script>
                    <div class="block-content">
                        <p class="font-size-sm text-muted">
                            
                        </p>
                        <p class="font-size-sm text-muted">
                             <strong></strong>
                        </p>

                        <form action="{{ route('upload', ['user' => $user]) }}" method="post" role="form" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" id="file" aria-label="File browser example" >
                            
                            
                        </form>

                        <p class="font-size-md font-italic">
                            
                       </p>

                       

                       
                       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                            <script>
                                $("#fileToUpload").change(function(){
                                    //alert(1);
                                    $(".file-input-trash").removeClass("hide");
                                    $(".file-form").addClass("d-inline-block");
                                   $(" #label-fileToUpload").addClass("btn-primary");
                                   $(" #label-fileToUpload").removeClass("order-btn-grey");
                                   $("#btn-text").text("Failai prisegti");
                                });
                                $(".file-input-trash").click(function(){
                                    $(".file-input-trash").addClass("hide");
                                    document.getElementById("fileToUpload").value = "";
                                    $(".file-form").removeClass("d-inline-block");
                                   $(" #label-fileToUpload").removeClass("btn-primary");
                                   $(" #label-fileToUpload").addClass("order-btn-grey");
                                   $("#btn-text").text("Prisegti failus");
                                });
                                </script>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                       
                    
                    <div id="tableDiv" style="display:none" class="table-responsive table-wrapper-scroll-x my-custom-scrollbar">
                    <table id="FileTable" class="table table-hover .table-responsive">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <td colspan="8">Download</td>
                            <th scope="col" class="d-none d-md-table-cell">Uploaded</th>
                            <th scope="col"><i class="fas fa-folder-minus"></i></th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        
                     


                        </tbody>
                    </table>
                    </div>
                    
                    
                       



                        
                            
                        
                        
                    </div>

                    

                    

                    <div class="block-header">
                        <h3 class="block-title"></h3>
                    </div>
                    
                    

                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
