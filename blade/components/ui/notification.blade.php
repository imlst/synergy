<div class="notification{{ !empty($class) ? ' ' . $class : '' }}{{ !empty($type) && $type === 'success' ? ' --success' : '' }}{{ !empty($type) && $type === 'warning' ? ' --warning' : '' }}{{ !empty($type) && $type === 'error' ? ' --error' : '' }}">
    @if(!empty($icon))
        <span class="notification__icon">
            <span class="icon"><svg><use xlink:href="{{ $icon }}"></use></svg></span>
        </span>
    @endif

    <div class="notification__content">
        @if(!empty($title))
            <div class="notification__title">
                @if(!empty($icon))
                    <span class="notification__icon">
                        <span class="icon"><svg><use xlink:href="{{ $icon }}"></use></svg></span>
                    </span>
                @endif

                <span>{{ $title }}</span>
            </div>
        @endif

        @if(!empty($text))
            <div class="notification__text">{{ $text }}</div>
        @endif
    </div>

    @if(isset($close) && $close)
        <div class="notification__close" onclick="this.parentNode.remove()">
            <span class="icon"><svg><use xlink:href="#cross"></use></svg></span>
        </div>
    @endif
</div>
