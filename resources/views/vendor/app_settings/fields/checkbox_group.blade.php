@component('app_settings::input_group', compact('field'))

    @include('app_settings::fields._description', ['field' => $field])

    <div class="permission-grid">
        @foreach($field['options'] as $option)
            @php
                $checkbox_value = Arr::get($option, 'value', $option, []);
                $checkbox_label = Arr::get($option, 'label', $option, []);
                $current_value = old($field['name'], \setting($field['name'], []));
            @endphp
            <label class="permission-card">
                <input
                    @if( in_array($checkbox_value, $current_value)) checked @endif
                    name="{{ $field['name'] }}[]"
                    value="{{ $checkbox_value }}"
                    class="{{ Arr::get( $field, 'class') }}"
                    type="checkbox">
                <span>{{ $checkbox_label }}</span>
            </label>
        @endforeach
    </div>
@endcomponent
