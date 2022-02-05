<?php


define('IS_ERROR', 'isError');

define('ERRORS', 'errors');
define('ERROR', 'error');



if (!function_exists('apiSuccess')) {
    function apiSuccess($data = null, $status = 200,$message = null)
    {
        return response()->json([
            'status' => true,
            'data' =>is_null($data) ? null: $data,
            'message'=>  is_null($message) ? 'Success': trans($message),
            'satus_code' => $status,

        ],
            $status)->header('Content-Type', 'application/json');
    }
}





if (!function_exists('getFirstError')) {
    function getFirstError($request, $validations,$customMessages)
    {
        $response = customeValidation($request, $validations,$customMessages);
        if ($response[IS_ERROR] == true) {
            $response[ERROR] = $response[ERRORS][0];
            return $response;
        }
        return $response;

    }
}
if (!function_exists('customeValidation')) {
    function customeValidation($request, $validations,$customMessages)
    {
        $validator = Validator::make($request->all(), $validations,$customMessages);
        if ($validator->fails()) {
            $err = array();
            foreach ($validator->errors()->toArray() as $index => $error) {
                foreach ($error as $index2 => $sub_error) {
                    array_push($err, $sub_error);
                }
            }
            return [
                IS_ERROR => true,
                ERRORS => $err,
            ];
        }


        return [
            IS_ERROR => false,
            ERRORS => [],
        ];

    }
}


if (!function_exists('password_rules')) {
    function password_rules($required = false, $min = '8', $confirmed = false)
    {
        $rules = [
            $required ? 'required' : 'nullable',
            'string',
            'min:' . $min
        ];
        return $confirmed ? array_merge($rules, ['confirmed']) : $rules;
    }
}



if (!function_exists('apiError')) {
    function apiError($message, $status = 400)
    {
        $messageCount = 1;
// var_dump($message);
        if (is_array($message)) {
            $messageCount = sizeof($message);
        } elseif ($message instanceof Collection) {
            $messageCount = $message->count();
        }

        if ($message instanceof MessageBag) {
            $message = $message->first();
        }
        return response()->json(
            [
                'status' => false,
                'data' =>null,
                'message' => trans($message),
                'satus_code' => $status,], $status)
            ->header('Content-Type', 'application/json');
    }
}



if (!function_exists('mobile_regex')) {
    function mobile_regex($typeOf = 'string')
    {
        if ($typeOf == 'array')
            return ['regex:/^([0-9\s\-\+\(\)]*)$/'];
        return 'regex:/^([0-9\s\-\+\(\)]*)$/';
    }
}


/*
    public function sendNotification($user,$title,$body)
    {
        $firebaseToken = User::whereNotNull('device_token')->where('id',$user->id)->pluck('device_token');

        $SERVER_API_KEY = 'AAAAPbYnbvc:APA91bEDLC8xpJMpdwF-XzY5IqytjIKZUroA-5NDfnaPGrVur2S_82hKuVxplzaruVdIkeyusUjNgI-OvMbXk6MwYvOO3N_F-WebE9WQRkcEHpU0rqzv4WCs9FJ6z_51MhnHQ_98KRqE';

        $data = [
            "registration_ids" => $firebaseToken,
            "notification" => [
                "title" =>$title,
                "body" =>$body,
            ]
        ];
        $dataString = json_encode($data);

        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

        $response = curl_exec($ch);

    }
    */






?>
