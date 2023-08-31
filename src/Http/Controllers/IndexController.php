<?php

namespace SpiritSaint\LaravelBacs\Http\Controllers;


use SpiritSaint\LaravelBacs\Http\Requests\IndexRequest;
use SpiritSaint\LaravelBacs\Records\HDR1;
use SpiritSaint\LaravelBacs\Records\VOL;

class IndexController
{
    public function __invoke(IndexRequest $request) {
        $response = [];

        $response["data"]["vol"] = VOL::fromRequest($request);
        $response["data"]["hdr1"] = HDR1::fromRequest($request);

        return response()->json($response);
    }
}