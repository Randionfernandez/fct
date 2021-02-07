
@extends('layouts.layout')


@section('contenido')
<div class="container">
    <form>
       <div class="form-check">
            <label class="form-check-inline">
                <input class="form-check-input" type="checkbox" name="hobby[]" value="1" @if(is_array(old('hobby')) && in_array(1, old('hobby'))) checked @endif> football
            </label>
            <label class="form-check-inline">
                <input class="form-check-input" type="checkbox" name="hobby[]" value="2" @if(is_array(old('hobby')) && in_array(2, old('hobby'))) checked @endif> basketball
            </label>
            <label class="form-check-inline">
                <input class="form-check-input" type="checkbox" name="hobby[]" value="3" @if(is_array(old('hobby')) && in_array(3, old('hobby'))) checked @endif> swimming
            </label>
        </div>
    </form>
</div>
@endsection