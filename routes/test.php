<?php
$arr2=Array();
foreach ($arr as $key => $val){
    $user=User::find($key);
    $content='';
    $total=0;
    foreach ($val as $v){

        $product=Product::find($v->product_id);
        $content=$content.''.$v->amount.' '.$product->name_ar.' ';
        $total=$total+$v->amount*$product->price;
    }

    $data=Array();
    $data['content']=$content;
    $data['cost']=$total;
    $data['order_number']=$Order->id;
    $data['payment_method']='COD';
    $data['default_sender']='0';
    $data['sender_name']=$user->name;
    $data['sender_phone']=$user->phone;

    $data['sender_governorate']=$user->governorates_id;
    $data['sender_area']=$user->regions_id;
    $data['sender_block']=$user->blocks_id;
    $data['sender_street']="";

    $data['receiver_name']=$request->first_name. '' .$request->second_name;
    $data['receiver_phone']=$request->phone;
    $data['receiver_governorate']=  $request->governorates_id;
    $data['receiver_area']=$request->regions_id;
    $data['receiver_block']=$request->blocks_id;
    $data['receiver_street']="";
    $data['receiver_unit']=$request->receiver_unit;



    $arr2[]=$data;

}

$data= json_encode($arr2);

$url='https://api.mirsalapp.com/rest/order/create-multi-order';
$access_key = 'IN4NF5XFS1HX';
$access_secret = 'VC0PO8M855JEDGV2';
$prog_lang = 'Other';
$requestData = $this->encrypt(json_encode($data),
    $access_secret);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, ['request_data' =>
    $requestData,
    'access_key' => $access_key, 'prog_lang' => $prog_lang]);
$response = curl_exec($ch);
curl_close($ch);

// dd($arr2);