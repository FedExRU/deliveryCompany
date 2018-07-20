{!! Form::model($order, [
  'url' => route('order.send', [], false),
  'novalidate',
  'class' => 'app-form'.( isset($ajaxForm) && $ajaxForm ? ' ajax-form' : '')
  ]) 
!!}
  {{ Form::hidden('good_id', $good->id) }}
  <div class="form-row">
    <div class="col-xs-12 col-lg-4">
      @include('layout.part.form.form-group', [
        'name'  => 'firstName',
        'label' => 'First Name',
        'type'  => 'text',
        'ajaxForm' => isset($ajaxForm) && $ajaxForm,
      ])
    </div>
    <div class="col-xs-12 col-lg-4 ">
      @include('layout.part.form.form-group', [
        'name'  => 'lastName',
        'label' => 'Last Name',
        'type'  => 'text',
        'ajaxForm' => isset($ajaxForm) && $ajaxForm,
      ])
    </div>
    <div class="col-xs-12 col-lg-4">
      @include('layout.part.form.form-group', [
        'name'  => 'email',
        'label' => 'Email',
        'type'  => 'text',
        'inputPrepend' => '@',
        'ajaxForm' => isset($ajaxForm) && $ajaxForm,
      ])
    </div>
  </div>
  <div class="form-row">
    <div class="col-xs-12 col-lg-6">
      @include('layout.part.form.form-group', [
        'name'  => 'city',
        'label' => 'City',
        'type'  => 'text',
        'ajaxForm' => isset($ajaxForm) && $ajaxForm,
      ])
    </div>
    <div class="col-xs-12 col-lg-3">
      @include('layout.part.form.form-group', [
        'name'  => 'state',
        'label' => 'State',
        'type'  => 'text',
        'ajaxForm' => isset($ajaxForm) && $ajaxForm,
      ])
    </div>
    <div class="col-xs-12 col-lg-3">
      @include('layout.part.form.form-group', [
        'name'  => 'zip',
        'label' => 'Zip',
        'type'  => 'number',
        'ajaxForm' => isset($ajaxForm) && $ajaxForm,
      ])
    </div>
  </div>
  @include('layout.part.form.form-group', [
      'name'  => 'agreenment',
      'label' => 'Agree to terms and conditions',
      'type'  => 'checkbox',
      'ajaxForm' => isset($ajaxForm) && $ajaxForm,
  ])
  {{ Form::submit('Send', ['class' => 'btn btn-primary-light']) }}

  
{!! Form::close() !!}
