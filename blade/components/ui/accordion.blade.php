<div class="accordion{{ isset($collapsed) && $collapsed ? ' --collapsed' : '' }}{{ !empty($class) ? ' ' . $class : '' }}" data-accordion>
    <div class="accordion__toggle" data-accordion-toggle>
        <div class="accordion__icon">
            <span></span>
            <span></span>
        </div>

        <div class="accordion__heading">
            <div class="accordion__title">{{ !empty($title) ? $title : '' }}</div>

            @if(!empty($subtitle))
                <div class="accordion__subtitle">{{ $subtitle }}</div>
            @endif
        </div>
    </div>

    <div class="accordion__body" data-accordion-body>{{ !empty($content) ? $content : '' }}</div>
</div>
