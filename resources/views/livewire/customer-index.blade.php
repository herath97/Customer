<div>
    <a href="{{ route('customers.create') }}" class="btn btn-primary">Create Student</a>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customer as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>
                        <button wire:click="delete({{ $customer->id }})" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $customer->links() }}
</div>

