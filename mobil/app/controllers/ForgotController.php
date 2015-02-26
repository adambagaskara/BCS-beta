<?php

class ForgotController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        return View::make("login.lupa");
    }


}
