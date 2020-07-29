<div class="number-picker{{ !empty($class) ? ' ' . $class : '' }}{{ isset($large) && $large ? ' --large' : '' }}" data-number-picker>
    <button type="button" data-number-picker-minus>–</button>
    <input type="text" {!! !empty($id) ? "id=\"$id\"" : '' !!} {!! !empty($name) ? "name=\"$name\"" : '' !!} {!! !empty($value) ? "value=\"$value\"" : '' !!} {!! !empty($min) ? "min=\"$min\"" : '' !!} {!! !empty($max) ? "max=\"$max\"" : '' !!} {!! !empty($maxlength) ? "maxlength=\"$maxlength\"" : '' !!} {{ isset($disabled) && $disabled ? 'disabled' : '' }}>
    <button type="button" data-number-picker-plus>+</button>
</div>
