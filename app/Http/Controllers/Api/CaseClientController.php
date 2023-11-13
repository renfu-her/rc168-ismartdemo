<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CaseClientService as Service;

class CaseClientController extends Controller
{

    // store
    public function store(Request $request)
    {
        return (new Service($request))
            ->runValidate('store')
            ->store()
            ->getResponse();
    }
    // // update

    // view
    public function view(Request $request)
    {
        return (new Service($request))
            ->runValidate('view')
            ->view()
            ->getResponse();
    }
    // all view
    public function getAll(Request $request)
    {
        return (new Service($request))
            ->getAll()
            ->getResponse();
    }

    // public function update(Request $request, $id)
    // {
    //     return (new Service($request, $id))
    //             ->runValidate('update')
    //             ->update()
    //             ->getResponse();
    // }
    // // destroy
    // public function destroy(Request $request, $id)
    // {
    //     return (new Service($request, $id))
    //             ->destroy()
    //             ->getResponse();
    // }
}
