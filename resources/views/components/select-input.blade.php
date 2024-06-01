<div class="form-group">
    <label for="{{ $name }}">{{ $label }} @if ($require == 'true')
            <span class="text-danger">*</span>
        @endif
    </label>
    <select name="{{ $name }}" id="{{ $name }}"
        class="form-control @if ($errors->has($name)) is-invalid @endif">
        <option value="" selected> --- Pilih {{ $label }} ---</option>
        @foreach ($options as $value => $item)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }}>
                {{ $item }}
            </option>
        @endforeach
    </select>
    <span class="invalid-feedback text-capitalize">
        @if ($errors->has($name))
            {{ $errors->first($name) }}
        @endif
    </span>
</div>
