<div class="form-group">
    <label for="{{ $name }}">{{ $label }} @if ($require == 'true')
            <span class="text-danger">*</span>
        @endif
    </label>
    <input type="text" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}"
        class="form-control @if ($errors->has($name)) is-invalid @endif" placeholder="{{ $label }}"
        @if ($type == 'date') onfocus="(this.type='date')"
        onblur="(this.type='text')" @endif>
    <span class="invalid-feedback text-capitalize">
        @if ($errors->has($name))
            {{ $errors->first($name) }}
        @endif
    </span>

</div>
