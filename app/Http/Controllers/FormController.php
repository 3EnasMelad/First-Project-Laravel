<?php

// app/Http/Controllers/FormController.php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Field;
use App\Models\FormEntry;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function create()
    {
        return view('forms.create');
    }

    public function store(Request $request)
    {

        $form = Form::create([
            'name' => $request->name
        ]);


        if (isset($request->fields)) {

            foreach ($request->fields as $field) {

                if (isset($field['type'])) {
                    Field::create([
                        'form_id' => $form->id,
                        'field_name' => $field['name'],
                        'field_type' => $field['type'],
                        'is_required' => isset($field['required']) ? true : false
                    ]);
                } else {

                    return redirect()->back()->withErrors(['error' => 'error in type']);
                }
            }
        }


        return redirect()->route('forms.index');
    }

    public function index()
    {
        $forms = Form::all();
        return view('forms.index', compact('forms'));
    }


    public function fill($formId)
    {
        $form = Form::findOrFail($formId);
        $fields = $form->fields;
        return view('forms.fill', compact('form', 'fields'));
    }


    public function submit(Request $request, $formId)
    {
        $data = json_encode($request->data);
        FormEntry::create([
            'form_id' => $formId,
            'data' => $data
        ]);

        return redirect()->route('forms.index');
    }



    public function destroy($id)
    {
        $form = Form::findOrFail($id);
        $form->delete();

        return redirect()->route('forms.index')->with('success', 'deleted successfully');
    }
}
