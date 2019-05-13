<ul class="navigationUl">

    @foreach($navigations as $navigate)

        <li class="navigationLi {{ $navigate->class }}">

            <a href="{{ in_array($navigate->short_address_name, $navigate->routeList) ? route($navigate->short_address_name) : '#' }}"
                class="{{ \Route::current()->getName() == $navigate->short_address_name ? 'active' : '' }}">

                @if(str_replace('_', '-', app()->getLocale()) == 'en')
                    {{ $navigate->title }}

                @elseif(str_replace('_', '-', app()->getLocale()) == 'rus')
                    {{ $navigate->title_rus }}
                @endif
            </a>
        </li>
    @endforeach
</ul>

