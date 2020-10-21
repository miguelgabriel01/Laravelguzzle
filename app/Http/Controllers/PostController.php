<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client([
            //URI de base é usado com solicitações relativas.
            'base_uri' => 'https://jsonplaceholder.typicode.com/',//url da api
            // Você pode definir qualquer número de opções de solicitação padrão.
            'timeout'  => 2.0,//o tempo de espera para a resposta
        ]);
        
        $response = $client->request('GET','posts');//requisição por get para os posts da API
        
        //dd($response->getBody());                         
        $posts =  json_decode($response->getBody()->getContents());
        
            return view('posts.index', compact('posts'));//redireciono para a view com a variavel post
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = new Client([
            //URI de base é usado com solicitações relativas.
            'base_uri' => 'https://jsonplaceholder.typicode.com/',//url da api
            // Você pode definir qualquer número de opções de solicitação padrão.
            'timeout'  => 2.0,//o tempo de espera para a resposta
        ]);
        
        $response = $client->request('GET',"posts/{$id}");//requisição por get para os posts da API
        
        //dd($response->getBody());                         
        $posts =  json_decode($response->getBody()->getContents());
        
            return view('posts.show', compact('posts'));//redireciono para a view com a variavel post

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
