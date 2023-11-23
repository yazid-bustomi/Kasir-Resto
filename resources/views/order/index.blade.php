<div class="container">
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>User ID</th>
                    <th>No Order</th>
                    <th>Bayar</th>
                    <th>Total Bayar</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $order->user_id }}</td>
                        <td>{{ $order->no_order }}</td>
                        <td>{{ $order->bayar }}</td>
                        <td>{{ $order->total_bayar }}</td>
                        <td>{{ $order->status }}</td>
                        <td>
                            {{-- <a href="{{ route('order.edit', $order->id) }}">
                                Edit</a>
                            <a href="{{ route('order.delete', $order->id) }}">
                                Delete</a> --}}
                                Bayar
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
