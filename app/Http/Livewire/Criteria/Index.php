<?php

namespace App\Http\Livewire\Criteria;

use App\Models\Criteria;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $data = Criteria::all();

        return view('livewire.criteria.index', [
            'kriteria'  => $data
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

        Post::create([
            'name' => $this->name
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = Criteria::findOrFail($id);

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
            $record = Criteria::find($this->selected_id);
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
        if ($id) {
            $record = Criteria::where('id', $id);
            $record->delete();
        }
    }
}
