<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NgdSinhVienController extends Controller
{
    //List//Insert//Update//Delete
    public function ngdList()
    {
        //Lay toan bo danh sach sinh vien
        $ngdSinhViens= NgdSinhVien::all();
        return view('NgdSinhVien.ngd-List',['ngdSinhViens'=>$ngdSinhViens]);
    }
    //Create(Insert)
    public function ngdcreate()
    {
        return view('NgdSinhVien.ngd-create');
    }
    //CreateSubnit
    public function ngdcreateSubmit(Request $request)
    {
        //Lay du lieu submit tren form,gan cho cac doi tuong sinh vien
        $ngdSinhVien= new NgdSinhVien();
        $ngdSinhVien->ngdMaSV=$request->ngdMaSV;
        $ngdSinhVien->ngdHoSV=$request->ngdHoSV;
        $ngdSinhVien->ngdTenSV=$request->ngdTenSV;
        $ngdSinhVien->ngdPhai=$request->ngdPhai;
        $ngdSinhVien->ngdNgaySinh=$request->ngdNgaySinh;
        $ngdSinhVien->ngdNoiSinh=$request->ngdNoiSinh;
        $ngdSinhVien->ngdMaKH=$request->ngdMaKH;
        return view('NgdSinhVien.ngd-create');
        //ghi vao tronf csdl
        $ngdSinhVien->save();
        return back->with('ngdSinhVien_created','Them moi sinh vien thanh cong!');
    }

}
