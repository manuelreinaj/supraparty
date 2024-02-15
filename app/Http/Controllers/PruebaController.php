<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    

    public function index(Request $request){
        
        $texto1 = 'Mi conejito Flopi tiene ';
        $edad = $request->edadFlopi;
        $color = '#edbe15';

        if ($edad < 8 ) {
           $texto2 = ' años y es muy joven.';
           $img = 'https://t1.ea.ltmcdn.com/es/images/3/8/6/cuidados_del_conejo_belier_7683_orig.jpg';
        }
        else{
            $texto2 = ' años y es muy viejo.';
            $img = 'https://bichomaniaco.com/wp-content/uploads/2019/04/conejo-belier8.1.jpg';
            $color = 'green';
        }

        echo '<h1 style="border: 2px solid red;color:'.$color.'">'.$texto1.$edad.$texto2.'</h1><br>';
        echo '<p> Mi conejito Flopi es muy cariñoso y me chupa la mano para saludarme.</p>';
        echo '<img width="150px" src="'.$img.'">';
        echo '<form method="GET" action=""><input name="edadFlopi" type="number"><input type="submit"></form>';
    }

}



//SELECT * FROM PRODUCT
    return Product::
    //where
            whereDate('updated_at', '>=', date('Y-m-d',strtotime($sNow)))
            //(And where)
            ->whereDate('updated_at', '<=', date('Y-m-d',strtotime($sNextWeek)))->get();    

foreach($asignaturas as $asignatura){
    $asignatura->numero = isset($asignatura->users) ? $asignatura->users->count() : '';
}

Auth()->user();
@if(Auth()->user())
<li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
    </i>
@else
    <li class="nav-item"><a class="nav-link" href="{{ url('register') }}">Register</a></li> 
    <li class="nav-item"><a class="nav-link" href="{{ url('login') }}">Login</a></li>
@endif

@if(Auth()->user())
    <li class="nav-item"><a class="nav-link" href="{{ url('user/profile') }}">{{ Auth()->user()->name }}</li>
@endif