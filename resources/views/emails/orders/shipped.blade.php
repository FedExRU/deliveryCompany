@component('mail::message')
# Thank you for the order

@component('mail::table')

| Order number     |  Product       		   | Price                         |
| :--------------- | :------------------------ | :---------------------------- |
| {{ $order->id }} |  {{ $order->good->name }} | $ {{ $order->good->price}}    |

@endcomponent

@component('mail::button', ['color' => 'green', 'url' => '#'])
Leave the review
@endcomponent

With the best wishes,<br>
{{ config('app.name') }}

@endcomponent
