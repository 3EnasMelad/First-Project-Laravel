
@extends('layouts.app')

@section('content') 
<form action="{{ route('forms.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Form Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div id="fields-container">
        <h4>Fields</h4>
        <div class="field-row mb-3" id="field-0">
            <label for="field_name" class="form-label">Field Name</label>
            <input type="text" class="form-control" name="fields[0][name]" required>

            <label for="field_type" class="form-label">Field Type</label>
            <input type="text" class="form-control" name="fields[0][type]" required>

            <label for="is_required" class="form-label">Is Required?</label>
            <input type="checkbox" class="form-check-input" name="fields[0][required]">
        </div>
    </div>

    <button type="button" class="btn btn-secondary" id="add-field-btn">Add Field</button>
    <button type="submit" class="btn btn-primary">Save</button>
</form>

<script>
    document.getElementById('add-field-btn').addEventListener('click', function() {
        const fieldCount = document.querySelectorAll('.field-row').length;
        const newFieldRow = document.createElement('div');
        newFieldRow.classList.add('field-row', 'mb-3');
        newFieldRow.id = `field-${fieldCount}`;
        
        newFieldRow.innerHTML = `
            <label for="field_name" class="form-label">Field Name</label>
            <input type="text" class="form-control" name="fields[${fieldCount}][name]" required>

            <label for="field_type" class="form-label">Field Type</label>
            <input type="text" class="form-control" name="fields[${fieldCount}][type]" required>

            <label for="is_required" class="form-label">Is Required?</label>
            <input type="checkbox" class="form-check-input" name="fields[${fieldCount}][required]">
        `;
        document.getElementById('fields-container').appendChild(newFieldRow);
    });
</script>

  <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 20px;
    }

    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: 0 auto;
    }

    label {
        font-size: 16px;
        margin-bottom: 8px;
        display: block;
        color: #555;
    }

    input[type="text"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
    }

    input[type="checkbox"] {
        margin-left: 10px;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
    }

    button[type="button"] {
        background-color: #007BFF;
    }

    button:hover {
        background-color: #45a049;
    }

    button[type="button"]:hover {
        background-color: #0056b3;
    }

    .field {
        margin-bottom: 15px;
    }

    .field input[type="text"],
    .field select {
        width: calc(50% - 10px);
        display: inline-block;
        margin-right: 10px;
    }

    .field input[type="text"]:last-child,
    .field select:last-child {
        margin-right: 0;
    }

    .field label {
        margin-top: 5px;
        display: inline-block;
    }

    #fields-container {
        margin-bottom: 20px;
    }
</style>
@endsection