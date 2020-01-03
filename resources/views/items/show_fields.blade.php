<!-- It Name Field -->
<div class="form-group">
    {!! Form::label('it_name', 'Item Name:') !!}
    <p>{{ $item->it_name }}</p>
</div>

<!-- It Incount Field -->
<div class="form-group">
    {!! Form::label('it_inCount', 'Initial Count:') !!}
    <p>{{ $item->it_inCount }}</p>
</div>

<!-- It Curcount Field -->
<div class="form-group">
    {!! Form::label('it_curCount', 'Current Count:') !!}
    <p>{{ $item->it_curCount }}</p>
</div>
