@extends('superadmin.cpanel.layout.index')

@section('content')
    <div class="ks-content">
        <div class="ks-body"    style="padding-top: 0px!important;">
            <div class="ks-nav-body-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">انشاء  بائع جديد</h5>

                                    @if ($errors->any())
                                        <div class="alert alert-warning"  style="    background-color: #f2dede;">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif


                                    <form method="POST" action="{{route('superadmin.createuser')}}"  enctype="multipart/form-data"   onsubmit="return Validate(this);" >
                                        @csrf
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label"> اسم المحل   </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control " name="name"  id="default-input"  name="name" required>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-2 form-control-label">اختر التصنيف الرئيسى</label>
                                            <div class="col-sm-10">

                                                <select class="form-control" name="category_id" required>
                                                    @foreach($Categories  as $Category)
                                                        <option value="{{$Category->id}}">{{$Category->name_ar}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-2 form-control-label" >اختر المحافظة </label>
                                            <div class="col-sm-10">

                                                <select class="form-control"  id="country_name"  name="governorates_id" required>
                                                    @foreach($Governorate  as $Governora)
                                                        <option value="{{$Governora->id}}">{{$Governora->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-2 form-control-label">اختر المنطقة </label>
                                            <div class="col-sm-10">

                                                <select class="form-control"  id="city_id"  name="regions_id" required>
                                                    {{--@foreach($Region  as $Regio)--}}
                                                        {{--<option value="{{$Regio->id}}">{{$Regio->name}}</option>--}}
                                                    {{--@endforeach--}}
                                                </select>
                                            </div>
                                        </div>




                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-2 form-control-label">اختر البلوك </label>
                                            <div class="col-sm-10">

                                                <select class="form-control"  id="blok_id" name="blocks_id" required>
                                                    {{--@foreach($Block  as $Bloc)--}}
                                                        {{--<option value="{{$Bloc->id}}">{{$Bloc->name}}</option>--}}
                                                    {{--@endforeach--}}
                                                </select>
                                            </div>
                                        </div>





                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">   البريد الالكترونى  </label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control " name="email" value="{{ old('email') }}" id="default-input" name="email" required>

                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">   كلمة السر  </label>
                                            <div class="col-sm-10">

                                                <input id="password" type="password" class="form-control
@error('password') is-invalid @enderror " name="password" required autocomplete="new-password">



                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label"> اعادة  كلمة السر  </label>
                                            <div class="col-sm-10">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                            </div>
                                        </div>






                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-2 form-control-label">ارفاق صورة المحل </label>
                                            <div class="col-sm-10">
                                                <button class="btn btn-primary ks-btn-file">
                                                    <span class="la la-cloud-upload ks-icon"></span>
                                                    <span class="ks-text">اختر الصورة </span>
                                                    <input type="file" name="imagestore"   id="uploadimg"  required>
                                                </button>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-2 form-control-label">ارفاق  الشعار </label>
                                            <div class="col-sm-10">
                                                <button class="btn btn-primary ks-btn-file">
                                                    <span class="la la-cloud-upload ks-icon"></span>
                                                    <span class="ks-text">اختر الصورة </span>
                                                    <input type="file" name="image"  id="uploadimg"  required>
                                                </button>
                                            </div>
                                        </div>







                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">حفظ</button>
                                        </div>


                                    </form>                            </div>


                                <div class="column page">


                                    <div class="content">
                                        <div class="body content-nav">
                                            <div class="nav-body">
                                                <div class="nav-body-wrapper">

                                                    <div class="container-fluid">

                                                        <table id="example"  style="width:100%" class="table table-striped table-bordered display nowrap" cellspacing="0"
                                                               width="100%">
                                                            <thead>
                                                            <tr>
                                                                <th class="no_sort">{{__('#')}}</th>
                                                                <th>اسم   المحل</th>
                                                                <th>البريد الالكترونى   </th>
                                                                <th>التصنيف الرئيسى</th>
                                                                <th> الشعار</th>
                                                                <th> صورة المحل</th>
                                                                <th>الحدث</th>


                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($Users  as $User)
                                                            @if($User->role !=1 )
                                                                <tr    style="
                                    <?php
                                                                if ($User->is_block ==1)
                                                                    echo "background-color: #d9534f  ;"

                                                                ?>">

                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{$User->name}}</td>
                                                                    <td>{{$User->email}}</td>
                                                                    <td>{{$User->CategoryName() ? $User->CategoryName() ->name_ar : '' }}</td>
                                                                    <td><img src="{{asset('uploads/'.$User->image)}}" alt="" width="100px" height="100px"></td>
                                                                    <td><img src="{{asset('uploads/'.$User->imagestore)}}" alt="" width="100px" height="100px"></td>

                                                                    <td><div class="ks-controls">




                                                                            <button type="button" class="btn btn-danger"  data-toggle="modal"
                                                                                    data-target="#centralModalSmedel{{ $User->id }}">حظر الحساب</button>
                                                                            <button type="button" class="btn btn-primary"    data-toggle="modal"
                                                                                    data-target="#myModal{{ $User->id }}" >تعديل</button>
                                                                            <button type="button" class="btn btn-primary"    data-toggle="modal"
                                                                                    data-target="#myModalchangepassword{{ $User->id }}" >تغيير كلمة السر </button>
                                                                        </div></td>

                                                                </tr>

                                                                <div class="modal fade" id="centralModalSmedel{{ $User->id }}" tabindex="-1"
                                                                     role="dialog" aria-labelledby="myModalLabel"
                                                                     aria-hidden="true">

                                                                    <!-- Change class .modal-sm to change the size of the modal -->
                                                                    <div class="modal-dialog modal-sm" role="document">


                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title w-100" id="myModalLabel">الحظر </h4>
                                                                                <button type="button" class="close" data-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                هل أنت متأكد من حظر هذا الحساب ؟
                                                                            </div>
                                                                            <div class="modal-footer">


                                                                                <!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">اعلاق</button>
                                                                                 -->
                                                                                <form method="POST" action="{{url('superadmin/blockstore/'.$User->id)}}"  enctype="multipart/form-data"   onsubmit="return Validate(this);">
                                                                                    @csrf
                                                                                    <button type="submit" class="btn btn-primary btn-lg"  id="delete_form">نعم</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>







                                                                <div class="modal fade" id="myModal{{ $User->id }}" role="dialog">

                                                                    <div class="modal-dialog">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">

                                                                            <div class="modal-body">

                                                                                @error('email.unique')
                                                                                        <div class="auth_login_modal_errors_error_container" style="">
                                                                                            <i class="fa fa-asterisk" style=""></i>
                                                                                            <span class="auth_login_modal_errors_error_text" style="">{{ $error }}</span>
                                                                                        </div>
                                                                                @enderror

                                                                                <form method="POST" action="{{url('superadmin/edituser/'.$User->id)}}"  enctype="multipart/form-data"   onsubmit="return Validate(this);">
                                                                                    @csrf
                                                                                    <div class="form-group row">
                                                                                        <label for="default-input" class="col-sm-2 form-control-label"> اسم المحل   </label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text" class="form-control @error('name') is-invalid @enderror " name="name"  id="default-input"  name="name"  value="{{ $User->name }}" required>
                                                                                            @error('name')
                                                                                            <span class="invalid-feedback" role="alert">

                                        <strong>{{ $message }}</strong>

                                    </span>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>

                                                                                    {{--<div class="form-group row">--}}
                                                                                    {{--<label for="default-input-rounded" class="col-sm-2 form-control-label">اختر التصنيف الرئيسى</label>--}}
                                                                                    {{--<div class="col-sm-10">--}}

                                                                                    {{--<select class="form-control" name="category_id" readonly="">--}}

                                                                                    {{--<option value="{{$User->category_id}}">{{$User->CategoryName() ? $User->CategoryName() ->name_ar : '' }}</option>--}}
                                                                                    {{--@foreach($Categories  as $Category)--}}
                                                                                    {{--@if($Category->id !== $User->category_id)--}}
                                                                                    {{--<option value="{{$Category->id}}">{{$Category->name_ar}}</option>--}}
                                                                                    {{--@endif--}}
                                                                                    {{--@endforeach--}}
                                                                                    {{--</select>--}}
                                                                                    {{--</div>--}}
                                                                                    {{--</div>--}}


                                                                                    <div class="form-group row">
                                                                                        <label for="default-input" class="col-sm-2 form-control-label">   البريد الالكترونى  </label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="email" class="form-control " name="email"  value="{{$User->email}}" id="default-input" name="email" required>


                                                                                        </div>
                                                                                    </div>








                                                                                    <div class="form-group row">
                                                                                        <label for="default-input-rounded" class="col-sm-2 form-control-label">ارفاق صورة المحل </label>
                                                                                        <div class="col-sm-10">
                                                                                            <button class="btn btn-primary ks-btn-file">
                                                                                                <span class="la la-cloud-upload ks-icon"></span>
                                                                                                <span class="ks-text">اختر الصورة </span>
                                                                                                <input type="file" name="imagestore"   id="uploadimg"  value="{{$User->imagestore}}" >
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="form-group row">
                                                                                        <label for="default-input-rounded" class="col-sm-2 form-control-label">ارفاق  الشعار </label>
                                                                                        <div class="col-sm-10">
                                                                                            <button class="btn btn-primary ks-btn-file">
                                                                                                <span class="la la-cloud-upload ks-icon"></span>
                                                                                                <span class="ks-text">اختر الصورة </span>
                                                                                                <input type="file" name="image"  id="uploadimg" value="{{$User->image}}"  >
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>






                                                                                    <div class="form-group">
                                                                                        <button type="submit" class="btn btn-primary"> تحديث</button>
                                                                                        <button class="btn btn-primary-outline ks-light" data-izimodal-close  data-dismiss="modal" >إلغاء الأمر</button>
                                                                                    </div>
                                                                                </form>







                                                                                                     </div>
                                                                            </div>

                                                                        </div>

                                                                    </div>


                                                                <div class="modal fade" id="myModalchangepassword{{ $User->id }}" role="dialog">

                                                                    <div class="modal-dialog">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">

                                                                            <div class="modal-body">
                                                                                <form method="POST" action="{{url('superadmin/editpassworduser/'.$User->id)}}"  enctype="multipart/form-data"   onsubmit="return Validate(this);">
                                                                                    @csrf
                                                                                    {{--<div class="form-group">--}}
                                                                                    {{--<label>نص الخبر</label>--}}
                                                                                    {{--<textarea rows="3" id="" class="form-control"></textarea>--}}
                                                                                    {{--</div>--}}

                                                                                    <div class="form-group ">
                                                                                        <label class="control-label">كلمة المرور الجديدة   </label>

                                                                                        <input type="password" class="form-control" id="default-input"  name="name_ar"  required >

                                                                                    </div>






                                                                                    <div class="form-group">
                                                                                        <button type="submit" class="btn btn-primary"> تحديث</button>
                                                                                        <button class="btn btn-primary-outline ks-light" data-izimodal-close  data-dismiss="modal" >إلغاء الأمر</button>
                                                                                    </div>
                                                                                </form>
                                                                        </div>

                                                                    </div>

                                                                </div>
@endif
                                                            @endforeach



                                                            </tbody>


                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>



    <script>







        @if (session()->has('flash_notification'))
                  setTimeout(function () {
            new Noty({

                text: '{{__('أهلا بك :Name ', ['Name' => Auth::user()->name])}}<br>{{session()->get('flash_notification')['message']}}',
                type: 'success',
                theme: 'mint',
                @if(App::getLocale() == 'ar')
                layout: 'topLeft',
                @else
                layout: 'topRight',
                @endif
                timeout: 3000
            }).show();
        }, 1500);
                @endif






        var _validFileExtensions = [".jpg", ".png", ".jpeg", ".gif"];
        function Validate(oForm) {

            var arrInputs = oForm.getElementsByTagName("input");
            for (var i = 0; i < arrInputs.length; i++) {
                var oInput = arrInputs[i];
                if (oInput.type == "file") {
                    var sFileName = oInput.value;


                    if (sFileName.length > 0) {

                        var blnValid = false;
                        for (var j = 0; j < _validFileExtensions.length; j++) {
                            var sCurExtension = _validFileExtensions[j];
                            if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                                blnValid = true;
                                //     oInput.classList.add("error");

                                break;
                            }
                        }


                        if (!blnValid) {

                            var txt=oInput.id;
                            txt= $('#'+txt).parent().parent().find('label').first().text();
                            Swal.fire({
                                icon: "error",
                                title: "خطأ!",
                                text: "خطأ في "+txt+"  "+
                                "يجيب اختيار ملفات امتداد jpg ,jpeg ,png,gif",
                                showConfirmButton: false,
                                timer: 3000
                            });
                            return false;
                        }
                    }
                }
            }

            return true;
        }

    </script>


@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#country_name').change(function () {
                var country_id =  $(this).children("option:selected").val();



                $("#city_id").html('');
                $.ajax({
                    url:"{{route('superadmin.get_reg_by_gov')}}",
                    type: "POST",
                    data: {
                        country_id: country_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType : 'json',
                    success: function(result){
                        {{--$('#city_id').html('<option value="">@lang('mobath.CityName')</option>');--}}
                        $.each(result.cities,function(key,value){
                            $("#city_id").append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                    }
                });
            });







            $('#city_id').change(function () {
                var country_id =  $(this).children("option:selected").val();



                $("#blok_id").html('');
                $.ajax({
                    url:"{{route('superadmin.get_block_by_reg')}}",
                    type: "POST",
                    data: {
                        country_id: country_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType : 'json',
                    success: function(result){
//                        $('#blok_id').html('<option value=""></option>');
                        $.each(result.cities,function(key,value){
                            $("#blok_id").append('<option value="'+value.id+'">'+value.code+'</option>');
                        });
                    }
                });
            });

        });

    </script>
    @endsection