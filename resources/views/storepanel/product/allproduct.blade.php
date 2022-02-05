@extends('storepanel.layout.index')

@section('content')

    <div class="ks-content">
        <div class="ks-body"    style="padding-top: 0px!important;">
            <div class="ks-nav-body-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 ks-panels-column-section">

                            <div class="card">



                                <div class="column page">


                                    <div class="content">
                                        <div class="body content-nav">
                                            <div class="nav-body">
                                                <div class="nav-body-wrapper">

                                                    <div class="container-fluid">

                                                        <br><br>
                                                        <button type="button" class="btn btn-primary  plus-button"  style="float: left;"   data-toggle="modal"
                                                                data-target="#myModal" > اضافة قيمة الخصم</button>

                                                        <div class="modal fade" id="myModal" role="dialog">

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

                                                                        <form method="POST" action="{{route('storepanel.discountvalue')}}"  enctype="multipart/form-data"   onsubmit="return Validate(this);">
                                                                            @csrf






                                                                            <div class="form-group row">
                                                                                <label for="default-input" class="col-sm-2 form-control-label"> قيمة الخصم الاجمالية </label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="text" class="form-control" id="default-input"  name="discount_value" required placeholder="0%"  value="{{auth::user()->discount_value }}">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <button type="submit" class="btn btn-primary"> حفظ</button>
                                                                                <button class="btn btn-primary-outline ks-light" data-izimodal-close  data-dismiss="modal" >إلغاء الأمر</button>
                                                                            </div>
                                                                        </form>







                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <br><br>
                                                        <table id="example"  style="width:100%" class="table table-striped table-bordered display nowrap" cellspacing="0"
                                                               width="100%">
                                                            <thead>
                                                            <tr>
                                                                <th class="no_sort">{{__('#')}}</th>
                                                                <th> اسم المنتج باللغة العربية</th>
                                                                <th>اسم المنتج باللغة الانجليزية</th>
                                                                <th>التصنيف الفرعى</th>
                                                                <th> السعر</th>
                                                                <th>الصورة</th>
                                                                <th>الحدث</th>


                                                            </tr>
                                                            </thead>

                                                            <tbody>
                                                            @foreach($Product  as $Produc)
                                                                        <tr style="
                                                                     <?php
                                                                        if ($Produc->is_visible ==1)
                                                                            echo "background-color: #b4f4c2"

                                                                        ?>">

                                                                            <td>{{ $loop->iteration }}</td>
                                                                            <td>{{$Produc->name_ar}}</td>
                                                                            <td>{{$Produc->name_en}}</td>
                                                                            <td>{{$Produc->SubCategoryName()->name_ar}}</td>
                                                                            <td>{{$Produc->price}}KWD</td>
                                                                            <td><img src="{{asset('uploads/'.$Produc->main_image)}}" alt="" width="100px" height="100px"></td>



<td>
                                                                            <button type="button" class="btn btn-danger"  data-toggle="modal"
                                                                                    data-target="#centralModalSmedel{{ $Produc->id }}">ازالة</button>
                                                                            <button type="button" class="btn btn-primary"    data-toggle="modal"
                                                                                    data-target="#myModal{{ $Produc->id }}" >تعديل</button>


            <button type="button" class="btn btn-danger"  data-toggle="modal"
            data-target="#myModalll{{ $Produc->id }}">عرض</button>
    <div class="modal fade" id="myModalll{{ $Produc->id }}" role="dialog">

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

                    <form method="POST" action="{{url('storepanel/discountvalueproduct/'.$Produc->id)}}"  enctype="multipart/form-data"   onsubmit="return Validate(this);">
                        @csrf




                        منتج عليه عرض
                        <input type="checkbox" id="default-input"  name="is_sale"  value="1" @if($Produc->is_sale  ==1) checked @endif>
                        <div class="form-group row">
                            <label for="default-input" class="col-sm-2 form-control-label"> سعر المنتج الجديد   </label>

                            <div class="col-sm-10">
                                <br>
                                <br>

                                <input type="text" class="form-control" id="default-input"  name="newprice"  value="{{$Produc->price}}"  >


                            </div>
                        </div>



                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"> حفظ</button>
                            <button class="btn btn-primary-outline ks-light" data-izimodal-close  data-dismiss="modal" >إلغاء الأمر</button>
                        </div>
                    </form>







                </div>
            </div>

        </div>

    </div>

</td>
                                                                            <div class="modal fade" id="viewmodel{{ $Produc->id }}" tabindex="-1"
                                                                                 role="dialog" aria-labelledby="myModalLabel"
                                                                                 aria-hidden="true">

                                                                                <!-- Change class .modal-sm to change the size of the modal -->
                                                                                <div class="modal-dialog modal-sm" role="document">


                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h4 class="modal-title w-100" id="myModalLabel">العرض </h4>
                                                                                            <button type="button" class="close" data-dismiss="modal"
                                                                                                    aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            هل أنت متاكد من عرضه
                                                                                        </div>
                                                                                        <div class="modal-footer">


                                                                                            <!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">اعلاق</button>
                                                                                             -->
                                                                                            <form method="POST" action="{{url('storepanel/viewsubcategory/'.$Produc->id)}}"  enctype="multipart/form-data"   onsubmit="return Validate(this);">
                                                                                                @csrf
                                                                                                <button type="submit" class="btn btn-primary btn-lg"  id="delete_form">نعم</button>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="modal fade" id="myModal{{ $Produc->id }}" role="dialog">

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

                                                                                            <form method="POST" action="{{url('storepanel/editproduct/'.$Produc->id)}}"  enctype="multipart/form-data"   onsubmit="return Validate(this);">
                                                                                                @csrf

                                                                                                <div class="form-group row">
                                                                                                    <label for="default-input-rounded" class="col-sm-2 form-control-label">اختر التصنيف الفرعى</label>
                                                                                                    <div class="col-sm-10">

                                                                                                        <select class="  form-control" name="category_id">

                                                                                                            <option value="{{$Produc->SubCategoryName()->id}}">{{$Produc->SubCategoryName()->name_ar}}</option>

                                                                                                        @foreach($SubCategories  as $SubCategor)
                                                                                                                    @if($Produc->SubCategoryName()->id != $SubCategor->id)
                                                                                                                    <option value="{{$SubCategor->id}}">{{$SubCategor->name_ar}}</option>
                                                                                                                @endif
                                                                                                            @endforeach
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="form-group row">
                                                                                                    <label for="default-input" class="col-sm-2 form-control-label"> اسم المنتج باللغة العربية    </label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <input type="text" class="form-control @error('name') is-invalid @enderror "  id="default-input"  name="name_ar"  value="{{ $Produc->name_ar }}" required>
                                                                                                        @error('name')
                                                                                                        <span class="invalid-feedback" role="alert">

                                        <strong>{{ $message }}</strong>

                                    </span>
                                                                                                        @enderror
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="form-group row">
                                                                                                    <label for="default-input" class="col-sm-2 form-control-label"> اسم المنتج باللغة الانجليزية     </label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <input type="text" class="form-control @error('name') is-invalid @enderror " name="name_en"  id="default-input"   value="{{ $Produc->name_en }}" required>
                                                                                                        @error('name')
                                                                                                        <span class="invalid-feedback" role="alert">

                                        <strong>{{ $message }}</strong>

                                    </span>
                                                                                                        @enderror
                                                                                                    </div>
                                                                                                </div>



                                                                                                <div class="form-group row">
                                                                                                    <label for="default-input" class="col-sm-2 form-control-label"> سعر المنتح</label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <input type="text" class="form-control" id="default-input"  name="price" required value="{{ $Produc->price }}">
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="form-group row">
                                                                                                    <label for="default-input" class="col-sm-2 form-control-label"> عرض على التطبيق</label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <input type="checkbox" id="vehicle1" name="is_visible" value="1" @if($Produc->is_visible ==1) checked @endif>
                                                                                                    </div>
                                                                                                </div>





                                                                                                <div class="form-group">
                                                                                                    <label>تفاصيل </label>
                                                                                                    <textarea rows="3" id="" class="form-control" name="details" style="float:right">
                                                                                                        {{$Produc->details}}
                                                                                                    </textarea>
                                                                                                </div>



                                                                                                <div class="form-group row">
                                                                                                    <label for="default-input-rounded" class="col-sm-2 form-control-label"> صورةالمنتج الرئيسية </label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <button class="btn btn-primary ks-btn-file">
                                                                                                            <span class="la la-cloud-upload ks-icon"></span>
                                                                                                            <span class="ks-text">اختر الصورة </span>
                                                                                                            <input type="file" name="main_image"   id="uploadimg"  value="{{$Produc->main_image}}" >
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

                                                                        </tr>





                                                                        <div class="modal fade" id="centralModalSmedel{{ $Produc->id }}" tabindex="-1"
                                                                             role="dialog" aria-labelledby="myModalLabel"
                                                                             aria-hidden="true">

                                                                            <!-- Change class .modal-sm to change the size of the modal -->
                                                                            <div class="modal-dialog modal-sm" role="document">


                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h4 class="modal-title w-100" id="myModalLabel">الحذف </h4>
                                                                                        <button type="button" class="close" data-dismiss="modal"
                                                                                                aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        هل أنت متأكد من حذف هذا العنصر هذا الاجراء؟
                                                                                    </div>
                                                                                    <div class="modal-footer">


                                                                                        <!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">اعلاق</button>
                                                                                         -->
                                                                                        <form method="POST" action="{{url('storepanel/deleteproduct/'.$Produc->id)}}"  enctype="multipart/form-data"   onsubmit="return Validate(this);">
                                                                                            @csrf
                                                                                            <button type="submit" class="btn btn-primary btn-lg"  id="delete_form">نعم</button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


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
                layout: 'topLeft', @else layout: 'topRight',
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
                            txt= $('#'+txt).parent().parent().parent().find('label').first().text();
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