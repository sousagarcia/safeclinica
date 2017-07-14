@extends('layouts.dashboard')

@section('content')
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="text-muted">Add a Lab treatment</h4>
            </div>
                <div class="content">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row">
                        <form action="{{ url('treatments') }}" role="form" method="POST">
                        {{ csrf_field() }}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Treatment Name</label>
                                    <input type="text" name="name" id="name" class="form-control border-input"  placeholder="e.g. Athequine 100ml" required="" autofocus="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">Price per unit</label>
                                    <input type="text" name="price" id="price" class="form-control border-input" placeholder="e.g. 200" required="">
                                </div>
                            </div>
                            <div class="col-md-8 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Add treatment
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection