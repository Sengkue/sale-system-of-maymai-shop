<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;    // ໂຕກວດຊອບ ການເຂົ້າລະບົບ
use Illuminate\Support\Facades\Hash;    // ໂຕຊ່ວຍ ເຂົ້າລະຫັດ ລະຫັດຜ່ານ
use App\Models\User;                    // import Model User ເຂົ້າມາໃຊ້
use Session;                            // import Session ເພື່ອທຳການ ອອກຈາກລະບົບ

class UserController extends Controller
{
    //
    public function register(Request $request){
        try {
            
            $userCheck = User::where('email',$request->re_email);

            if($userCheck->count()){  /// ກວດຊອບອີເມວໃນຖານຂໍ້ມູນ

                $success = false;
                $message = "ອີເມວນີ້ໄດ້ຖຶກລົງທະບຽນແລ້ວ";

            } else {  // ບໍ່ມີອີເມວ

                $user = new User();
                $user->name = $request->re_name;
                $user->email = $request->re_email;
                $user->password = Hash::make($request->re_password);
                $user->save();

                $success = true;
                $message = "ລົງທະບຽນສຳເລັດ!";

            }

        } catch (\Illnminate\Database\QueryException $ex) {
            //throw $th;
            $success = false;
            $message = $ex->getMessage();
        }

        $response = [
            'success' => $success,
            'message' => $message
        ];

        return response()->json($response);
    }


    public function login(Request $request){

        $check_email_pass_login = [
            'email' => $request->login_email,
            'password' => $request->login_password
        ];

        if(Auth::attempt($check_email_pass_login)){
                $success = true;
                $message = "ເຂົ້າສູ່ລະບົບສຳເລັດ!";
        } else {
                $success = false;
                $message = "ການເຂົ້າສູ່ລະບົບ ບໍ່ສຳເລັດ!";
        }

        $response = [
            'success' => $success,
            'message' => $message
        ];

        return response()->json($response);

    }

    public function logout(){
        
        
        Session::flush();  // ທຳລາຍ Session ເພື່ອອອກຈາກລະບົບ
        $success = true;
        $message = "ອອກຈາກລະບົບສຳເລັດ!";

        $response = [
            'success' => $success,
            'message' => $message
        ];

        return response()->json($response);
    }


}
