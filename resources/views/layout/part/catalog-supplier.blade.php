<br>

<div class="container">
	<div class="row">
		<div class="col-12">
			<h3 class="d-block w-100 supplier-name">
			{{ $content->name }}
			</h3>
			<a href="#" class="website-url">
				<span class="website">
					{{ $content->website }}
				</span>
			</a>
		</div>
		<div class="col-12 mt-3">
			<p>
				{{ $content->description }}
			</p>
		</div>
		<div class="col-12 mt-5">
			<table class="table">
				<tr>
					<td class="sm-none"><span class="text-uppercase"><strong>Email:</strong></span></td>
					<td data-label="Email:"><span class="text-muted"><a href="mailto:{{ $content->email }}">{{ $content->email }}</a></span></td>
				</tr>
				<tr>
					<td class="sm-none"><span class="text-uppercase"><strong>Phone:</strong></span></td>
					<td data-label="Phone:"><span class="text-muted"><a href="tel:{{ $content->phone }}">{{ $content->phone }}</a></span></td>
				</tr>
				<tr>
					<td class="sm-none"><span class="text-uppercase"><strong>Address:</strong></span></td>
					<td data-label="Address:"><address class="text-muted">{{ $content->address }}</a></address></td>
				</tr>
			</table>
		</div>

	</div>
</div>