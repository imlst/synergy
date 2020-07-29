<?
    $at_first = false;
    $at_start = false;
    $at_end = false;
    $at_last = false;

    (empty($pages) || !is_int($pages)) && $pages = 0;
    (empty($current) || !is_int($current)) && $current = 0;
    empty($steps) && $steps = false;
    $current > $pages && $current = $pages;

    $prev = $current - 1;
    $next = $current + 1;

    $current === 1
        ? $at_first = true
        : ($current <= 4 && $pages >= 6) && $at_start = true;

    $current === $pages
        ? $at_last = true
        : ($current >= $pages - 3 && $pages >= 6) && $at_end = true;
?>

<div class="pagination{{ !empty($class) ? ' ' . $class : '' }}{{ $steps ? ' --steps' : '' }}{{ !$steps && $pages < 6 ? ' --few' : '' }}{{ $at_first ? ' --at-first' : '' }}{{ $at_last ? ' --at-last' : '' }}">
    @if($steps)
        @if($pages > 0 && $current > 1 || $pages === 0)
            <a href="javascript:void(0);" class="pagination__page --step">
                <span class="icon"><svg><use xlink:href="#back-48x"></use></svg></span>
            </a>
        @endif
    @endif

    @if($pages > 0 && $pages < 6)
        @for($i = 1; $i <= $pages; $i++)
            <a
                href="javascript:void(0);"
                class="pagination__page{{ $i === $current ? ' --active' : '' }}{{ $i === $prev ? ' --prev' : '' }}{{ $i === $next ? ' --next' : '' }}"
                {{ $current === 1 ? 'tabindex=-1' : '' }}
            >
                <span>{{ $i }}</span>
            </a>
        @endfor
    @elseif ($pages >= 6)
        <a
            href="javascript:void(0);"
            class="pagination__page --first{{ $current === 1 ? ' --active' : '' }}"
            {{ $current === 1 ? 'tabindex=-1' : '' }}
        >
            <span>1</span>
        </a>

        @if($at_start)
            @if($current === 4)
                <a href="javascript:void(0);" class="pagination__page">
                    <span>{{ $prev - 1 }}</span>
                </a>
            @endif
        @else
            @if(!$at_first)
                <div class="pagination__page --dots">...</div>
            @endif
        @endif

        @if($at_last)
            <a href="javascript:void(0);" class="pagination__page">
                <span>{{ $prev - 1 }}</span>
            </a>
        @endif

        @if($prev > 1)
            <a href="javascript:void(0);" class="pagination__page --prev">
                <span>{{ $prev }}</span>
            </a>
        @endif

        @if($current > 1 && $current < $pages)
            <a href="javascript:void(0);" class="pagination__page --active" tabindex="-1">
                <span>{{ $current }}</span>
            </a>
        @endif

        @if($next < $pages)
            <a href="javascript:void(0);" class="pagination__page --next">
                <span>{{ $next }}</span>
            </a>
        @endif

        @if($at_first)
            <a href="javascript:void(0);" class="pagination__page">
                <span>{{ $next + 1 }}</span>
            </a>
        @endif

        @if($at_end)
            @if($current === $pages - 3)
                <a href="javascript:void(0);" class="pagination__page">
                    <span>{{ $next + 1 }}</span>
                </a>
            @endif
        @else
            @if(!$at_last)
                <div class="pagination__page --dots">...</div>
            @endif
        @endif

        <a
            href="javascript:void(0);"
            class="pagination__page --last{{ $current === $pages ? ' --active' : '' }}"
            {{ $current === $pages ? 'tabindex=-1' : '' }}
        >
            <span>{{ $pages }}</span>
        </a>
    @endif

    @if($steps)
        @if($pages > 0 && $current < $pages || $pages === 0)
            <a href="javascript:void(0);" class="pagination__page --step">
                <span class="icon"><svg><use xlink:href="#next-48x"></use></svg></span>
            </a>
        @endif
    @endif
</div>
