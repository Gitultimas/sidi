<div class="col-12 p-0">
    <ul class="nav">
        <li class="">
            <a href="{{url('/noticias/reciente')}}" class="{{ !Route::is('public.noticias') ?: 'active'}} {{ !Route::is('public.noticiasReciente') ?: 'active'}}">Reciente</a>
        </li>
        <li class="">
            <a href="{{url('/noticias/relevante')}}" class="{{ !Route::is('public.noticiasRelevante') ?: 'active'}}">Relevante</a>
        </li>
        <li>
            <a href="{{url('/noticias/categoria')}}" class="{{ !Route::is('public.noticiasCategoria') ?: 'active'}}">Categoría</a>
        </li>
        <li>
            <a href="{{url('/noticias/autor')}}" class="{{ !Route::is('public.noticiasAutor') ?: 'active'}}">Autor</a>
        </li>
        <li>
            <a href="{{url('/noticias/antiguo')}}" class="{{ !Route::is('public.noticiasAntiguo') ?: 'active'}}">Antiguo</a>
        </li>
    </ul>
</div>