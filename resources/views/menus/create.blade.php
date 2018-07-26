@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create menu</div>

                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{ route('menus.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('enabledFrom') ? ' has-error' : '' }}">
                                <label for="enabledFrom" class="col-md-4 control-label">Enabled from</label>

                                <div class="col-md-6">
                                    <input id="enabledFrom" type="datetime-local" class="form-control" name="enabledFrom" value="{{ old('enabledFrom') }}" required autofocus>

                                    @if ($errors->has('enabledFrom'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('enabledFrom') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('enabledUntil') ? ' has-error' : '' }}">
                                <label for="enabledUntil" class="col-md-4 control-label">Enabled until</label>

                                <div class="col-md-6">
                                    <input id="enabledUntil" type="datetime-local" class="form-control" name="enabledUntil" value="{{ old('enabledUntil') }}" required autofocus>

                                    @if ($errors->has('enabledUntil'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('enabledUntil') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Create
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection