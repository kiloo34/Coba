<?php

namespace App\Http\Livewire\Alternatif;

use App\Models\Alternative;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $data = Alternative::all();

        return view('livewire.alternatif.index', [
            'alternatif' => $data
        ]);
    }

    private function resetInput()
    {
        $this->name = null;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:5',
        ]);

        Alternative::create([
            'name' => $this->name
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = Alternative::findOrFail($id);

        $this->selected_id = $id;
        $this->name = $record->name;
        $this->phone = $record->phone;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => 'required|min:5',
            'phone' => 'required'
        ]);

        if ($this->selected_id) {
            $record = Alternative::findOrFail($this->selected_id);
            $record->update([
                'name' => $this->name,
                'phone' => $this->phone
            ]);

            $this->resetInput();
            $this->updateMode = false;
        }
    }

    public function destroy($id)
    {
        dd('alternatif');
        $data = Alternative::findOrFail($id);
        $data->delete();
    }
}
