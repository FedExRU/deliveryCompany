<div class="modal fade" tabindex="-1" role="dialog" id="modal-form">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Order status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include('layout.part.order-status-message-sm', [
          'orderId' => is_null($order) ? null : $order->id,
          'goodName' => is_null($order) ? null : $order->good->name,
          'orderDate' => $orderDate
        ])
      </div>
    </div>
  </div>
</div>