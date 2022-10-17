<?php

namespace App\Http\Middleware;

use App\Models\Models\Permissao;
use App\Models\Models\Role;
use App\Models\Models\Rota;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route as FacadesRoute;

class EnsureUserRoleIsAllowedToAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $userRole = Auth()->user()->role_id;
        $route = FacadesRoute::currentRouteName();
        $rota = Rota::where('nome', $route)->first();
        try {
            if (
                Permissao::isRoleHasRightToAccess($userRole, $rota->id)
                || in_array($route, $this->userAccessRole()[$userRole])) {
                return $next($request);
            } else {
                abort(403, 'Não Autorizado!');
            }
        } catch (\Throwable $th) {
            abort(403, 'Você não esta autorizador a aceder essa página!');
        }
        
        
    }

    private function userAccessRole()
    {
        $admin = Role::where('nome', 'Dev')->first();
        
        return [
            $admin->id => [
                'provincia',
                'distrito',
                'esquadra',
                'indiciado',
                'desaparecido',
                'permissao',
                'utilizador',
                'relatorio',
               
                'rota',
                'permissao'
            ],
        ];
    }
}
