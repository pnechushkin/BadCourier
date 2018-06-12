@foreach ($Reviews as $Review)
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{ $Review->name }}</div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">{{ $Review->review_text }}</div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{ date('d.m.Y',strtotime ($Review->date_of_birth)) }}</div>
    </div>
@endforeach
