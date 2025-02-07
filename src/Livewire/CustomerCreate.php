<?php
namespace Custom\Customer\Livewire;

use Livewire\Component;
use Custom\Customers\Models\Customer;

class CustomerCreate extends Component
{
    public $student_id, $name;

    protected $rules = [
        'name' => 'required|string|max:255'
    ];

    public function mount($customerId = null)
    {
        if ($customerId) {
            $customer = Customer::findOrFail($customerId);
            $this->customer_id = $customer->id;
            $this->name = $customer->name;
        }
    }

    public function save()
    {
        $this->validate();

        Customer::updateOrCreate(
            ['id' => $this->customer_id],
            ['name' => $this->name]
        );

        return redirect()->route('customers.index');
    }

    public function render()
    {
        return view('customer::livewire.customer-create');
    }
}
