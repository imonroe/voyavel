<p style="text-align:center;">
    @foreach($items as $menu_item) 
    <span style="padding-left:5px; padding-right:5px;"><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></span>
    @endforeach
</p>