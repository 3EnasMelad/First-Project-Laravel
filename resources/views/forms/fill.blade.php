

 @extends('layouts.app')

 @section('content') 
<form action="{{ route('forms.submit', $form->id) }}" method="POST" style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    @csrf
    @foreach($fields as $field)
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="field_{{ $field->id }}" style="font-weight: bold; color: #333;">{{ $field->field_name }}:</label>
            <input type="{{ $field->field_type }}" name="data[{{ $field->id }}]" id="field_{{ $field->id }}" class="form-control" style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px;"{{ $field->is_required ? ' required' : '' }}>
        </div>
    @endforeach
    <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; width: 100%; margin-top: 20px;">Submit</button>
</form>

@endsection

