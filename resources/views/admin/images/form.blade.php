<?php use \App\Slider; ?>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($image->title) ? $image->title : ''}}" required>
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label><br />
    <select name="status" class="form-control" id="status" >
    
        <option value="Enabled" {{ (isset($image) && $image->status == "Enabled") ? 'selected' : ''}}>Enabled</option>
         <option value="Disabled" {{ (isset($image) && $image->status == "Disabled") ? 'selected' : ''}}>Disabled</option>
   
</select>
    
   {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" required>{{ isset($image->description) ? $image->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('file') ? 'has-error' : ''}}">
    <label for="file" class="control-label">{{ 'File' }}</label>
    <input class="form-control" name="file" type="file" id="file" value="{{ isset($image->file) ? $image->file : ''}}" >
    {!! $errors->first('file', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('slider_id') ? 'has-error' : ''}}">
    {!! Form::label('slider_id', 'Slider ID | The following  IDs are available:', ['class' => 'control-label']) !!}
    <?php  $sliders = Slider::all();?>
    @foreach($sliders as $slider)
    {{$slider->id}}
    @endforeach
    {!! Form::number('slider_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('slider_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Save' }}">
</div>
