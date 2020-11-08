<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DesignCheckout;

class DesignCheckoutController extends Controller
{
    public function kamiz_index()
    {
    	$kamiz=DesignCheckout::all();
    	return view('user.designs.kamiz_design');
	}
	public function salwar_index()
    {
    	$kamiz=DesignCheckout::all();
    	return view('user.designs.salwar_design');
	}
	public function salwar_kamiz_index()
    {
    	$kamiz=DesignCheckout::all();
    	return view('user.designs.salwar_kamiz_design');
    }

    

    public function kamiz_store(Request $request)
    {

    	$kamiz=new DesignCheckout();

    	$kamiz->email = $request->email;
    	$kamiz->name = $request->name;
    	$kamiz->contact = $request->contact;
    	$kamiz->address = $request->address;
    	$kamiz->kf = $request->kf;
    	$kamiz->sleeve = $request->sleeve;
    	$kamiz->nf = $request->nf;
    	$kamiz->bottom = $request->bottom;
    	$kamiz->kb = $request->kb;
    	$kamiz->nb = $request->nb;
    	$kamiz->ankle = $request->ankle;
    	$kamiz->armhole = $request->armhole;
    	$kamiz->aroundhead = $request->aroundhead;
    	$kamiz->fbklb = $request->fbklb;
    	$kamiz->backwidth = $request->backwidth;
    	$kamiz->bottomlength = $request->bottomlength;
    	$kamiz->bust = $request->bust;
    	$kamiz->elbow = $request->elbow;
    	$kamiz->frontchest = $request->frontchest;
    	$kamiz->fbklf = $request->fbklf;
    	$kamiz->swf = $request->swf;
    	$kamiz->fullsleeve = $request->fullsleeve;
    	$kamiz->insideleg = $request->insideleg;
    	$kamiz->hip = $request->hip;
    	$kamiz->midcalf = $request->midcalf;
    	$kamiz->midthigh = $request->midthigh;
    	$kamiz->nw = $request->nw;
    	$kamiz->outleg = $request->outleg;
    	$kamiz->shoulder = $request->shoulder;
    	$kamiz->se = $request->se;
    	$kamiz->wh = $request->wh;
    	$kamiz->waist = $request->waist;
    	$kamiz->wrist = $request->wrist;

    	$kamiz->save();

    	session()->flash('success', 'Your designed dress order has been received. We will contact with you ASAP!! ');
    	return redirect('/');

    }
}
