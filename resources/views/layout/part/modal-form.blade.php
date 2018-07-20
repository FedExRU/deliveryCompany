<div class="modal fade" tabindex="-1" role="dialog" id="modal-form">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Preparing an order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include('layout.part.order-form', [
          'good' => $good,
          'order' => $order,
          'ajaxForm' => true,
        ])
      </div>
    </div>
  </div>
</div>