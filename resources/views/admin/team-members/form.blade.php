<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ __('Name') }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($teammember->name) ? $teammember->name : old('name')}}">

    {!! $errors->first('name', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('position') ? 'has-error' : ''}}">
    <label for="position" class="control-label">{{ __('Position') }}</label>
    <input class="form-control" name="position" type="text" id="position" value="{{ isset($teammember->position) ? $teammember->position : old('position')}}">

    {!! $errors->first('position', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('social_link') ? 'has-error' : ''}}">
    <label for="social_link" class="control-label">{{ __('Social Link') }}</label>
    <input class="form-control" name="social_link" type="text" id="social_link" value="{{ isset($teammember->social_link) ? $teammember->social_link : old('social_link')}}">

    {!! $errors->first('social_link', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ __('Image') }}</label>
    <input class="form-control" name="image" type="file" id="image">

    {!! $errors->first('image', '<p class="help-block text-danger">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
