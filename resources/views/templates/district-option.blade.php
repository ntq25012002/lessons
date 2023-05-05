@if (isset($districts) && !empty($districts))
    @foreach ($districts as $district)
        <option value="{{ $district->id }}">{{ $district->district_name }}</option>
    @endforeach
@endif