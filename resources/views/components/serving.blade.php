<div class="menu-list__recipe"> 
    <p><strong>{{$item->recipe }}</strong></p>

    <ul class="menu-list__ingredients">
      @foreach($item->ingredients as $ing)
        <li class="menu-list__ingredient">{{ $ing->name_ingredients }}</li>
      @endforeach
    </ul>
</div>

