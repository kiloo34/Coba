<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $data = Post::paginate(2);
        return view('livewire.post.index', [
            'posts' => $data
        ]);
    }

    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:5',
            'phone' => 'required'
        ]);

        Post::create([
            'name' => $this->name,
            'phone' => $this->phone
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = Post::findOrFail($id);

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
            $record = Post::find($this->selected_id);
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
            $record = Post::where('id', $id);
            $record->delete();
        }
    }
}
