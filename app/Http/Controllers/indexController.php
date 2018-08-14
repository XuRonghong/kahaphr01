<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\SysMember;
use Illuminate\Http\Request;

class indexController extends BaseController
{

    /*
     *
     */
    public function index (Request $request)
    {

        $DaoMember = SysMember::query()->where('bDel','=',0)
            ->paginate(10);

        if ($DaoMember){
            foreach ($DaoMember as $item){
                $item->iBirthday = date('Y-m-d', $item->iBirthday);
            }
        }

        return View()->make('index')
            ->with( 'sys_member', $DaoMember )
            ->with( 'aaData', $DaoMember->items() )
            ->with( 'links_html', $DaoMember->links()->toHtml() );
    }



    public function add (Request $request)
    {
        return View()->make('add');
    }



    public function doAdd (Request $request)
    {

        $Dao = new SysMember();
        $Dao->vName = ( $request->exists( 'vName' ) ) ? $request->input( 'vName' ) : "";
        $Dao->vGender = ( $request->exists( 'vGender' ) ) ? $request->input( 'vGender' ) : "";
        $iBirthday = ( $request->exists( 'iBirthday' ) ) ? $request->input( 'iBirthday' ) : '';
        $Dao->iBirthday = strtotime( $iBirthday );
        $Dao->vEmail = ( $request->exists( 'vEmail' ) ) ? $request->input( 'vEmail' ) : "";
        $Dao->vContact = ( $request->exists( 'vContact' ) ) ? $request->input( 'vContact' ) : "";
        $Dao->vAddress = ( $request->exists( 'vAddress' ) ) ? $request->input( 'vAddress' ) : "";
        $Dao->iCreateTime = $Dao->iUpdateTime = time();
        $Dao->save();

        return redirect(url(''));
    }



    public function doDel (Request $request)
    {
        $iId = ( $request->exists( 'iId' ) ) ? $request->input( 'iId' ) : 0;

        $Dao = SysMember::query()->find($iId);
        $Dao->iUpdateTime = time();
        $Dao->bDel = 1;
        $Dao->save();

        return redirect(url(''));
    }



    public function edit (Request $request , $iId)
    {
        //$iId = ( $request->exists( 'id' ) ) ? $request->input( 'id' ) : 0;
        $DaoMember = SysMember::query()->find($iId);
        if ($DaoMember){
            //foreach ($DaoMember as $item){
            $DaoMember->iBirthday = date('Y-m-d', $DaoMember->iBirthday);
            //}
        }
        return View()->make('edit')
            ->with( 'sys_member', $DaoMember );
    }




    public function doSave (Request $request)
    {
        $iId = ( $request->exists( 'iId' ) ) ? $request->input( 'iId' ) : 0;

        $Dao = SysMember::query()->find($iId);
        $Dao->vName = ( $request->exists( 'vName' ) ) ? $request->input( 'vName' ) : "";
        $Dao->vGender = ( $request->exists( 'vGender' ) ) ? $request->input( 'vGender' ) : "";
        $iBirthday = ( $request->exists( 'iBirthday' ) ) ? $request->input( 'iBirthday' ) : '';
        $Dao->iBirthday = strtotime( $iBirthday );
        $Dao->vEmail = ( $request->exists( 'vEmail' ) ) ? $request->input( 'vEmail' ) : "";
        $Dao->vContact = ( $request->exists( 'vContact' ) ) ? $request->input( 'vContact' ) : "";
        $Dao->vAddress = ( $request->exists( 'vAddress' ) ) ? $request->input( 'vAddress' ) : "";
        $Dao->iCreateTime = $Dao->iUpdateTime = time();
        $Dao->save();

        return redirect(url(''));
    }
}
