@extends('storepanel.layout.index')

@section('content')

    <div class="ks-content">
        <div class="ks-body"    style="padding-top: 0px!important;">
            <div class="ks-nav-body-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">انشاء  تصنيف فرعى  جديد</h5>
                                    <form method="POST" action="{{route('superadmin.addsubcategory')}}"  enctype="multipart/form-data"   onsubmit="return Validate(this);">
                                        @csrf                                    <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label"> اسم التصنيف باللغة العربية </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="default-input"  name="name_ar" required>
                                            </div>
                                        </div>




                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">   اسم التصنيف باللغة الانجليزية  </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="default-input" name="name_en" required>
                                            </div>
                                        </div>

                                        {{--<div class="form-group row">--}}
                                            {{--<label for="default-input-rounded" class="col-sm-2 form-control-label">اختر التصنيف الرئيسى</label>--}}
                                            {{--<div class="col-sm-10">--}}

                                                {{--<select class="form-control" name="category_id">--}}
                                                    {{--@foreach($Categories  as $Category)--}}
                                                        {{--<option value="{{$Category->id}}">{{$Category->name_ar}}</option>--}}
                                                    {{--@endforeach--}}
                                                {{--</select>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}


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
                                                                <th>اسم التصنيف باللغة العربية</th>
                                                                <th>اسم التصنيف باللغة الانجليزية</th>
                                                                <th>التصنيف الرئيسى</th>
                                                                <th>الحدث</th>


                                                            </tr>
                                                            </thead>

                                                            <tbody>

                                                                @if(auth::user()->category_id == 1)
                                                                    @foreach($FirstCategory  as $FirstCatego)
                                                                    <tr>

                                                                        <td>{{ $loop->iteration }}</td>
                                                                        <td>{{$FirstCatego->name_ar}}</td>
                                                                        <td>{{$FirstCatego->name_en}}</td>
                                                                        <td>{{$FirstCatego->CategoryName()->name_ar}}</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-success"  data-toggle="modal"
                                                                                    data-target="#viewmodel{{ $FirstCatego->id }}">عرض</button>
                                                                        </td>

                                                                        <div class="modal fade" id="viewmodel{{ $FirstCatego->id }}" tabindex="-1"
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
                                                                                        <form method="POST" action="{{url('storepanel/viewsubcategory/'.$FirstCatego->id)}}"  enctype="multipart/form-data"   onsubmit="return Validate(this);">
                                                                                            @csrf
                                                                                            <button type="submit" class="btn btn-primary btn-lg"  id="delete_form">نعم</button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </tr>
                                                                    @endforeach
                                                                @endif
</tbody>


                                                            <tbody>

                                                                @foreach($subCategories  as $subCategory)

                                                                @if($subCategory->user_id == auth::user()->id)

                                                                    <tr>

                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{$subCategory->name_ar}}</td>
                                                                    <td>{{$subCategory->name_en}}</td>
                                                                    <td>{{$subCategory->CategoryName()->name_ar}}</td>

                                                                    <td>
                                                                        <div class="ks-controls">



                                                                            {{--<button type="button" class="btn btn-success"  data-toggle="modal"--}}
                                                                                    {{--data-target="#viewmodel{{ $subCategory->id }}">عرض</button>--}}
                                                                            <button type="button" class="btn btn-danger"  data-toggle="modal"
                                                                                    data-target="#centralModalSmedel{{ $subCategory->id }}">ازالة</button>
                                                                            <button type="button" class="btn btn-primary"    data-toggle="modal"
                                                                                    data-target="#myModal{{ $subCategory->id }}" >تعديل</button>

                                                                        </div>
                                                                        <div class="modal fade" id="viewmodel{{ $subCategory->id }}" tabindex="-1"
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
                                                                                        <form method="POST" action="{{url('storepanel/viewsubcategory/'.$subCategory->id)}}"  enctype="multipart/form-data"   onsubmit="return Validate(this);">
                                                                                            @csrf
                                                                                            <button type="submit" class="btn btn-primary btn-lg"  id="delete_form">نعم</button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>



                                                                </tr>

                                                                <div class="modal fade" id="centralModalSmedel{{ $subCategory->id }}" tabindex="-1"
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
                                                                                <form method="POST" action="{{url('storepanel/deletesubcategory/'.$subCategory->id)}}"  enctype="multipart/form-data"   onsubmit="return Validate(this);">
                                                                                    @csrf
                                                                                    <button type="submit" class="btn btn-primary btn-lg"  id="delete_form">نعم</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal fade" id="myModal{{ $subCategory->id }}" role="dialog">

                                                                    <div class="modal-dialog">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">

                                                                            <div class="modal-body">

                                                                                <form method="POST" action="{{url('storepanel/editsubcategory/'.$subCategory->id)}}"  enctype="multipart/form-data"   onsubmit="return Validate(this);">
                                                                                    @csrf
                                                                                    {{--<div class="form-group">--}}
                                                                                    {{--<label>نص الخبر</label>--}}
                                                                                    {{--<textarea rows="3" id="" class="form-control"></textarea>--}}
                                                                                    {{--</div>--}}

                                                                                    <div class="form-group ">
                                                                                        <label class="control-label">الاسم باللغة العربية </label>

                                                                                        <input type="text" class="form-control" id="default-input"  name="name_ar"    value="{{ $subCategory->name_ar }}" required>

                                                                                    </div>



                                                                                    <div class="form-group ">
                                                                                        <label class="control-label"> الاسم باللغة الانجليزية</label>

                                                                                        <input type="text" class="form-control" id="default-input" name="name_en"   value="{{ $subCategory->name_en }}" required>
                                                                                    </div>

                                                                                    {{--<div class="form-group row">--}}
                                                                                        {{--<label for="default-input-rounded" class="col-sm-2 form-control-label"> التصنيف الرئيسى</label>--}}
                                                                                        {{--<div class="col-sm-10">--}}

                                                                                            {{--<select class="form-control" name="category_id">--}}
                                                                                                {{--<option value="{{$subCategory->category_id}}">{{$subCategory->CategoryName()->name_ar}}</option>--}}

                                                                                            {{--@foreach($Categories  as $Category)--}}
                                                                                                {{--@if($Category->id!=$subCategory->category_id)--}}
                                                                                                    {{--<option value="{{$Category->id}}">{{$Category->name_ar}}</option>--}}
                                                                                                    {{--@endif--}}
                                                                                                {{--@endforeach--}}
                                                                                            {{--</select>--}}
                                                                                        {{--</div>--}}
                                                                                    {{--</div>--}}



                                                                                    <div class="form-group">
                                                                                        <button type="submit" class="btn btn-primary"> تحديث</button>
                                                                                        <button class="btn btn-primary-outline ks-light" data-izimodal-close  data-dismiss="modal" >إلغاء الأمر</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>

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