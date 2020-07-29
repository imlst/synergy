<div class="tabbar{{ isset($scrollable) && $scrollable ? ' --scrollable' : '' }}{{ isset($centered) && $centered ? ' --centered' : '' }}{{ !empty($class) ? ' ' . $class : '' }}">
    @if(!isset($scrollable) || !$scrollable)
        <div class="tabbar__toggle" data-tabbar-toggle>
            <div>Курсы: <span class="tabbar__toggle-name" data-tabbar-toggle-name></span></div>

            <div class="tabbar__toggle-arrow">
                <span class="icon"><svg><use xlink:href="#arrow-dropdown"></use></svg></span>
            </div>
        </div>
    @endif

    <div class="tabbar__scroller">
        <div class="tabbar__wrapper">
            @if(isset($tabs))
                @foreach( $tabs as $tab)
                    <div class="tabbar__tab{{ isset($tab['active']) && $tab['active'] ? ' active' : '' }}{{ isset($tab['disabled']) && $tab['disabled'] ? ' disabled' : '' }}" data-tabbar-tab="{{ !empty($tab['id']) ? $tab['id'] : '' }}">
                        @if(!empty($tab['icon']))
                            <span class="icon --large"><svg><use xlink:href="{{ $tab['icon'] }}"></use></svg></span>
                        @endif

                        <span>{{ $tab['label'] }}</span>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
