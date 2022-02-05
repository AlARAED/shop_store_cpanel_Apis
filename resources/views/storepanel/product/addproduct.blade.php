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

                                    @if ($errors->any())
                                        <div class="alert alert-warning"  style="    background-color: #f2dede;">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <h5 class="card-title">انشاء  منتج  جديد</h5>
                                    <form method="POST" action="{{route('storepanel.addproduct')}}"  enctype="multipart/form-data"   onsubmit="return Validate(this);">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-2 form-control-label">اختر التصنيف الفرعى</label>
                                            <div class="col-sm-10">

                                                <select class="select category_id_" name="category_id">
                                                    @foreach($SubCategories  as $SubCategor)
                                                        <option value="{{$SubCategor->id}}">{{$SubCategor->name_ar}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">    اسم المنتج باللغة العربية</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="default-input"  name="name_ar" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label"> اسم المنتج  باللغة الانجليزية</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="default-input"  name="name_en" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label"> سعر المنتح</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="default-input"  name="price" required placeholder="0,0KWD">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label"> عرض على التطبيق</label>
                                            <div class="col-sm-10">
                                                <input type="checkbox" id="vehicle1" name="is_visible" value="1">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label"> خاصية الالوان</label>
                                            <div class="col-sm-1" style="margin: auto 0">
                                                <input type="checkbox" id="color-radio" name="is_colored" value="1">
                                            </div>
                                            <div class="col-sm-5" id="color-div" style="display: none">
                                                <button id="addcolor" type="button"  class="btn-info">أضف</button>

                                                <div class="color-div" style="padding: 0 !important;">
                                                    <input type="color" name="color1" id="color1" style="height: 40px; background: 0;padding: 2px;">
                                                </div>
                                                <input type="hidden" name="colorcount" id="colorcount">

                                            </div>
                                        </div>


                                        {{--<div class="form-group row" id="color-div" style="display: none">--}}
                                            {{--<button id="addcolor" type="button">Add</button>--}}

                                            {{--<div class="color-div">--}}
                                            {{--<input type="color" name="color1" id="color1" >--}}
                                            {{--</div>--}}
                                            {{--<input type="hidden" name="colorcount" id="colorcount">--}}


                                        {{--<label for="default-input-rounded" class="col-sm-2 form-control-label">اختر  اللون  </label>--}}

                                        {{--<div class="col-sm-10">--}}
                                        {{--<select class="select2-multiple form-control" name="category_id"  multiple="multiple"     >--}}
                                        {{--<option value="1">weewrew</option>--}}
                                        {{--<option value="2">DSADSA</option>--}}
                                        {{--</select>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}



                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label"> خاصية الحجم</label>
                                            <div class="col-sm-10">
                                                <input type="checkbox"  name="is_sized" value="1"  id="size-radio">
                                            </div>
                                        </div>




                                        <div id="size-div" style="display: none">



                                                <div class="form-group row">
                                                    <label for="default-input-rounded" class="col-sm-2 form-control-label">اختر  الحجم</label>
                                                    <div class="col-sm-10">

                                                        <select class="select" multiple name="sizes[]" id="news">
                                                            @foreach($size  as $siz)
                                                                <option value="{{$siz->id}}">{{$siz->name}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>

                                            <input type="hidden" name="sizecount" id="sizecount">
                                        </div>






                                        <div class="form-group">
                                        <label>تفاصيل </label>
                                        <textarea rows="3" id="" class="form-control" name="details"></textarea>
                                        </div>


                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-2 form-control-label">ارفاق صورة رئيسية    </label>
                                            <div class="col-sm-10">
                                                <button class="btn btn-primary ks-btn-file">
                                                    <span class="la la-cloud-upload ks-icon"></span>
                                                    <span class="ks-text">اختر الصورة </span>
                                                    <input type="file" name="main_image"  id="uploadimg"  required>
                                                </button>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-2 form-control-label">ارفاق صور  المنتج  </label>
                                            <div class="col-sm-10">
                                                <button class="btn btn-primary ks-btn-file">
                                                    <span class="la la-cloud-upload ks-icon"></span>
                                                    <span class="ks-text">اختر الصورة </span>
                                                    <input type="file" id="files" name="files[]" multiple><br><br>
                                                </button>
                                            </div>
                                        </div>



                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">حفظ</button>
                                        </div>


                                    </form>                            </div>


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

@section('js')


    <script>
        $('#color-radio').change(function (e) {
            if($('#color-radio').is(':checked')){
                $('#color-div').css('display','flex');
            }else{
                $('#color-div').css('display','none');
            }
        });


        $('#size-radio').change(function (e) {
            if($('#size-radio').is(':checked')){
                $('#size-div').show();
            }else{
                $('#size-div').hide();
            }
        });
    </script>


    <script>
        $(document).ready(function() {
            // Select2 Multiple
            $('select.select#news').select2({
                dir: 'rtl',
                tags: true
            });
            $('.category_id_').select2({
                placeholder: "اختر",
                dir: "rtl"
            });

        });

        var colorcount=1;
        $('#addcolor').click(function () {
            $('.color-div').append('<input type="color" style="height: 40px; background: 0;padding: 2px;" name="color'+(++colorcount)+'" id="color'+(colorcount)+'" >');
            $('#colorcount').val(colorcount);

        });
    </script>
@endsection
