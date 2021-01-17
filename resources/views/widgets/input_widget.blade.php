  
<div class="form-group">
    @if($config['label'] === true)
        <label for="{{ $config['id'] }}">{{ $config['label-name'] }}</label>
    @endif
    <input type="{{ $config['type'] }}" class="{{ $config['class'] }}" id="{{ $config['id'] }}"
           name="{{ $config['name'] }}" placeholder="{{ $config['placeholder'] }}"
           @if($config['required'] === true) required @endif
           @if($config['value'] !== null) value="{{ $config['value'] }}" @endif>
</div>