<div class="bd-example bd-example-tabs">
  <nav class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="prod-info-tab" data-toggle="tab" href="#prod-info" role="tab" aria-controls="home" aria-expanded="true">Summary</a>
    <a class="nav-item nav-link " id="supplier-info-tab" data-toggle="tab" href="#supplier-info" role="tab" aria-controls="profile" aria-expanded="false">Suppier</a>
     <a class="nav-item nav-link" id="order-tab" data-toggle="tab" href="#order" role="tab" aria-controls="profile" aria-expanded="false">Make order</a>
  </nav>
  <div class="tab-content" id="nav-tabContent">

    @include('layout.part.catalog-show-tab-content', [
      'id' => 'prod-info',
      'ariaLabelledBy' => 'prod-info-tab',
      'template' => 'layout.part.catalog-summary',
      'isActive' => true,
      'content' => $data
    ])

     @include('layout.part.catalog-show-tab-content', [
      'id' => 'supplier-info',
      'ariaLabelledBy' => 'supplier-info-tab',
      'template' => 'layout.part.catalog-supplier',
      'content' => $data->supplier
    ])

     @include('layout.part.catalog-show-tab-content', [
      'id' => 'order',
      'ariaLabelledBy' => 'order-tab',
      'template' => 'layout.part.catalog-make-order',
      'content' => $data
    ])

    
  </div>
</div>