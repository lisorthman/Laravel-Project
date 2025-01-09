@props(['label', 'name', 'type' => 'text', 'rows' => 3, 'cols' => 40, 'value' => '', 'placeholder' => '', 'class' => 'form-control'])

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    @if($type === 'textarea')
        <textarea 
            name="{{ $name }}" 
            id="{{ $name }}" 
            rows="{{ $rows }}" 
            cols="{{ $cols }}" 
            placeholder="{{ $placeholder }}" 
            class="{{ $class }}"
        >{{ old($name, $value) }}</textarea>
    @else
        <input 
            type="{{ $type }}" 
            name="{{ $name }}" 
            id="{{ $name }}" 
            value="{{ old($name, $value) }}" 
            placeholder="{{ $placeholder }}" 
            class="{{ $class }}"
        />
    @endif
</div>
