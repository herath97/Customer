<?php

namespace Custom\Customer\Livewire;

use Livewire\Component;
use Custom\Customer\Models\Customer;
use Livewire\WithPagination;


class CustomerIndex extends Component
{
    use WithPagination;

    public function delete($id)
    {
        Customer::findOrFail($id)->delete();
    }

    public function render()
    {
        return view('customer::livewire.customer-index', [
            'customers' => Customer::latest()->paginate(5)
        ]);
    }
}
