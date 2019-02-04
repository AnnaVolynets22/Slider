<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($slider->title) ? $slider->title : ''}}" required>
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label><br />
    <select name="status" class="form-control" id="status" >
    
        <option value="Enabled" {{ (isset($slider) && $slider->status == "Enabled") ? 'selected' : ''}}>Enabled</option>
         <option value="Disabled" {{ (isset($slider) && $slider->status == "Disabled") ? 'selected' : ''}}>Disabled</option>
   
</select>
    
   {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($slider->description) ? $slider->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('start_date') ? 'has-error' : ''}}">
    <label for="start_date" class="control-label">{{ 'Start Date' }}</label>
    <input class="form-control" name="start_date" type="datetime-local" id="start_date" value="{{ isset($slider->start_date) ? $slider->start_date : ''}}" >
    {!! $errors->first('start_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('end_date') ? 'has-error' : ''}}">
    <label for="end_date" class="control-label">{{ 'End Date' }}</label>
    <input class="form-control" name="end_date" type="datetime-local" id="end_date" value="{{ isset($slider->end_date) ? $slider->end_date : ''}}" >
    {!! $errors->first('end_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('show_dots') ? 'has-error' : ''}}">
    <label for="show_dots" class="control-label">{{ 'Show Dots' }}</label>
    <div class="radio">
    <label><input name="show_dots" type="radio" value="1" {{ (isset($slider) && 1 == $slider->show_dots) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="show_dots" type="radio" value="0" @if (isset($slider)) {{ (0 == $slider->show_dots) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('show_dots', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('infinite') ? 'has-error' : ''}}">
    <label for="infinite" class="control-label">{{ 'Infinite' }}</label>
    <div class="radio">
    <label><input name="infinite" type="radio" value="1" {{ (isset($slider) && 1 == $slider->infinite) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="infinite" type="radio" value="0" @if (isset($slider)) {{ (0 == $slider->infinite) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('infinite', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('speed') ? 'has-error' : ''}}">
    <label for="speed" class="control-label">{{ 'Speed' }}</label>
    <input class="form-control" name="speed" type="number" id="speed" value="{{ isset($slider->speed) ? $slider->speed : ''}}" >
    {!! $errors->first('speed', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('slides_to_show') ? 'has-error' : ''}}">
    <label for="slides_to_show" class="control-label">{{ 'Slides To Show' }}</label>
    <input class="form-control" name="slides_to_show" type="number" id="slides_to_show" value="{{ isset($slider->slides_to_show) ? $slider->slides_to_show : ''}}" >
    {!! $errors->first('slides_to_show', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('adaptive_height') ? 'has-error' : ''}}">
    <label for="adaptive_height" class="control-label">{{ 'Adaptive Height' }}</label>
    <div class="radio">
    <label><input name="adaptive_height" type="radio" value="1" {{ (isset($slider) && 1 == $slider->adaptive_height) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="adaptive_height" type="radio" value="0" @if (isset($slider)) {{ (0 == $slider->adaptive_height) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('adaptive_height', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fade') ? 'has-error' : ''}}">
    <label for="fade" class="control-label">{{ 'Fade' }}</label>
    <div class="radio">
    <label><input name="fade" type="radio" value="1" {{ (isset($slider) && 1 == $slider->fade) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="fade" type="radio" value="0" @if (isset($slider)) {{ (0 == $slider->fade) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('fade', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cssEase') ? 'has-error' : ''}}">
    <label for="cssEase" class="control-label">{{ 'Cssease' }}</label>
    <input class="form-control" name="cssEase" type="text" id="cssEase" value="{{ isset($slider->cssEase) ? $slider->cssEase : ''}}" >
    {!! $errors->first('cssEase', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('slides_to_scroll') ? 'has-error' : ''}}">
    <label for="slides_to_scroll" class="control-label">{{ 'Slides To Scroll' }}</label>
    <input class="form-control" name="slides_to_scroll" type="number" id="slides_to_scroll" value="{{ isset($slider->slides_to_scroll) ? $slider->slides_to_scroll : ''}}" >
    {!! $errors->first('slides_to_scroll', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
