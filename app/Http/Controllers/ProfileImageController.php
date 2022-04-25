<?php

namespace App\Http\Controllers;

use App\Models\ProfileImage;
use Illuminate\Http\Request;
use Nette\Utils\Image;
use Illuminate\Support\Facades\DB;

class ProfileImageController extends Controller
{
    public static function showByIdUser($id_user)
    {
        $sql = DB::table('profile_image')
        ->where('fk_user', '=', $id_user)
        ->whereNotNull('deleted_at')
        ->select([
            'image',
        ]);
        return $sql->first();
    }
    //
    public function index()
    {
        return view('image');
    }

    //salva uma nova imagem de perfil no banco
    public function save(Request $request)
    {     
        //return('Método save');
        $validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048', 
        ]);

        $path = $request->file('image')->getRealPath();
        $profile = file_get_contents($path);
        $base64 = base64_encode($profile);

        $save = new ProfileImage();
        $save->image = base64_decode($base64);
        $save->fk_user = 1;
        $save->save();

        //dd($request);
        return base64_decode($base64);
 
        return redirect('upload-image')->with('status', 'Image Has been uploaded');
 
    }
}
