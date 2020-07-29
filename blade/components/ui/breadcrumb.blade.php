<div class="breadcrumb">
    <ul class="breadcrumb__list">
        @foreach($items as $item)
            @if(!empty($item['name']))
                <li>
                    @if(isset($item['link']) && $item['link'])
                        <a href="javascript:void(0);">{{ $item['name'] }}</a>

                        @if($item !== end($items))
                            <span class="icon"><svg><use xlink:href="#arrowhead"></use></svg></span>
                        @endif
                    @else
                        <span>{{ $item['name'] }}</span>
                    @endif
                </li>
            @endif
        @endforeach
    </ul>
</div>
