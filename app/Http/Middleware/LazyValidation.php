<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LazyValidation
{
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->header('token');

        if (!$token) {
            return response()->json([
                'tipo' => 'erro',
                'mensagem' => [
                    'token' => ['Token não informado']
                ]
            ], 401);
        }

        if ($token !== env('API_TOKEN')) {
            return response()->json([
                'tipo' => 'erro',
                'mensagem' => [
                    'token' => ['Token inválido']
                ]
            ], 401);
        }

        return $next($request);
    }
}
