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
                                    <h5 class="card-title">   تحديث بيانات الحساب</h5>
                                    <form method="POST" action="{{route('storepanel.accountvendore')}}"  enctype="multipart/form-data"   onsubmit="return Validate(this);">


                                        @csrf


                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label"> الاسم  </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="default-input"  name="name" required value="{{auth::user()->name}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label"> البر يد الالكترونى  </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="default-input"  name="email" required value="{{ auth::user()->email }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">   اعادة تعيين كلمة السر   </label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="default-input"  name="password" >
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-2 form-control-label">الصورة الشخصية </label>
                                            <div class="col-sm-10">
                                                <button class="btn btn-primary ks-btn-file">
                                                    <span class="la la-cloud-upload ks-icon"></span>
                                                    <span class="ks-text">اختر الصورة </span>
                                                    <input type="file" name="image" id="uploadimg"  value="{{auth::user()->image}}">
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