<?
    $options_string = '';

    if (!empty($options)) {
        foreach($options as $key => $val) {
            if (is_string($val)) {
                $options_string .= "\"$key\": \"$val\", ";
            } else {
                $options_string .= "\"$key\": $val, ";
            }

        }

        $options_string = substr($options_string, 0, -2);
    }
?>

<div
    class="input{{ empty($value) ? ' --empty' : '' }}{{ !empty($placeholder) ? ' --placeholder' : '' }}{{ isset($disabled) && $disabled ? ' --disabled' : '' }}" {!! !empty($style) ? "style='$style'" : '' !!}
    data-input='{ {{ $options_string }} }'
>
    <div class="input__wrapper">
        @if(isset($options['validate']) || isset($options['required']))
            <span class="icon input__validate-icon --success"><svg><use xlink:href="#checkmark-16x"></use></svg></span>
            <span class="icon input__validate-icon --error"><svg><use xlink:href="#cross-16x"></use></svg></span>
        @endif

        <input type="{{ !empty($type) ? $type : 'text' }}" {!! isset($value) ? "value='$value'" : '' !!} {!! isset($disabled) && $disabled ? "disabled" : '' !!}>

        @if(!empty($placeholder))
            <div class="input__placeholder">{!! $placeholder !!}</div>
        @endif
    </div>

    @if(isset($options['validate']) || isset($options['required']))
        <div class="input__message" data-input-message></div>
    @endif
</div>
