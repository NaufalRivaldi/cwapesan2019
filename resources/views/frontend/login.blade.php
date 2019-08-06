@extends('frontend.master')

@section('title', '- Scoreboard')

@section('content')
    <div class="container" style="margin-top:5%">
        <div class="row">
            <div class="box-login">
                <div class="box-left">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="display-4">Login</h3>
                                <hr>
                                <form action="">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" name="email" placeholder="xxxx@cwabali.com" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="text" name="password" placeholder="*****" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-info btn-block" value="Masuk">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-right">
                    <div class="text-custom">
                        <h3 class="display-4">PORTAL CWJA</h3>
                        <p class="lead text-bold">PT. CITRA WARNA JAYA ABADI</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection