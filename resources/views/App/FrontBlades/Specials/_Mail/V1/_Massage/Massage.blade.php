<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <td><strong>სახელი - გვარი</strong></td>
        <td>{{ $order_name }} - {{ $order_lastname }}</td>
    </tr>
    <tr>
        <td><strong>კომპანიის დასახელება</strong></td>
        <td>{{ $order_company }}</td>
    </tr>
    <tr>
        <td><strong>კომპანიის ს.კოდი</strong></td>
        <td>{{ $order_company_code }}</td>
    </tr>
    <tr>
        <td><strong>ელ-ფოსტა</strong></td>
        <td>{{ $order_email }}</td>
    </tr>
    <tr>
        <td><strong>ტელეფონის ნომერი</strong></td>
        <td>{{ $order_phone }}</td>
    </tr>
</table>

<table >
    <thead>
        <tr>
            <th><strong>სურათი</strong></th>
            <th><strong>სახელი</strong></th>
            <th><strong>ფასი</strong></th>
            <th><strong>რაოდენობა</strong></th>
        </tr>
    </thead>
    @foreach($cartItems as $cartItem)
        <tr>
            <td>
                <img alt="{{ $cartItem->name }}" src="{{ asset('public/'.$cartItem->options->image) }}" height="150">
            </td>
            <td>
                <p class="product-name">
                    {{ $cartItem->name }}
                </p>
            </td>
            <td>
                <span>{{ $cartItem->price }} GEL </span>
            </td>

            <td>
                <span> {{ $cartItem->qty }} </span>
            </td>
        </tr>
    @endforeach
        <tr>
            <td colspan="4"><strong>შეკვეთის საერთო ღირებულება</strong> {{ Cart::subtotal() }} GEL</td>
        </tr>
</table>

</body>
</html>
