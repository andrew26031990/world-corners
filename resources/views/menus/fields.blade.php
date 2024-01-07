<!-- Parent Id Field -->
<div class="form-group col-sm-6">
    @if(isset($menu->id))
        {!! Form::label('select_field', 'Подкатегория:') !!}
        {!! Form::select('parent_id', $allMenu, $menu->parent_id, ['class' => 'form-control']) !!}
    @else
        {!! Form::label('select_field', 'Подкатегория:') !!}
        {!! Form::select('parent_id', $allMenu, null, ['class' => 'form-control']) !!}
    @endif
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Название категории:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Is Active Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('is_active', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('is_active', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('is_active', 'Активен', ['class' => 'form-check-label']) !!}
    </div>
</div>
