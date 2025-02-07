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
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customers->name }}</td>
                    <td>
                        <button wire:click="delete({{ $customer->id }})" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $customers->links() }}
</div>

