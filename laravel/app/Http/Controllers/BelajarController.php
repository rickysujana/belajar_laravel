<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class BelajarController extends Controller
{
    public function index()
    {
    	$title = 'Ini halaman home';
    	$content = 'Saat ini kita berada di halaman Home codinganricky.com';
 
    	return view('home.index', compact('title', 'content'));
    }

    public function getOne()
    {
       $title = 'One To One Relationships Ricky.';
       $content = 'Saat ini kita belajar relasi One To One.';
       $users = \App\User::get();
     
       return view('home.index', compact('title', 'content', 'users'));
    }
 
    public function getPage()
    {
    	$title = 'Ini halaman HTML';
    	$content = 'Saat ini kita berada di halaman HTML codinganricky.com';
 
    	return view('home.index2', compact('title', 'content'));
    }

    public function hasOne($nama)
    {
        $title = 'One To One Relationships ONPHPID.';
        $content = 'Saat ini kita belajar relasi One To One.';
        $profile = \App\Profile::where('nama', $nama)->first();
     
        return view('home.index2', compact('title', 'content', 'profile'));
    }

    public function getOneMany()
    {
        $title = 'One To Many and Many To One Relationships ONPHPID.';
        $content = 'Saat ini kita belajar relasi One To Many and Many To One.';
        $users = \App\User::all();
     
        return view('one_to_many', compact('users', 'title', 'content'));
    }
     
    public function getmanyOne()
    {
        $title = 'One To Many and Many To One Relationships ONPHPID.';
        $content = 'Saat ini kita belajar relasi One To Many and Many To One.';
        $kendaraans = \App\Kendaraan::all();
     
        return view('many_to_one', compact('kendaraans', 'title', 'content'));
    }

}
