<div class="form-group">
    <label for="{{ $name }}">{{ $label }} @if ($require == 'true')
            <span class="text-danger">*</span>
        @endif
    </label>
    <input type="text" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}"
        class="form-control @if ($errors->has($name)) is-invalid @endif"
        @if ($type == 'date') onfocus="(this.type='date')"
        onblur="(this.type='text')" @endif
        @if ($name == 'rt') maxlength="3" @endif @if ($name == 'rw') maxlength="3" @endif
        @if ($name == 'rt' || $name == 'rw') placeholder="{{ $label . ' (Cth. 001)' }}" @else
        placeholder="{{ $label }}" @endif>
    <span class="invalid-feedback text-capitalize font-italic">
        @if ($errors->has($name))
            {{ $errors->first($name) }}
        @endif
    </span>
</div>
