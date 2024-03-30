@extends('layout.master')

@section('main')

<section class="registration">

    <div class="container">
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
                <form action="" method="post">
                    <div>
                        <label for="" class="form-label">Username</label>
                        <input type="text" name="username" id="" class="form-control">
                    </div>
                    <div>
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" id="" class="form-control">
                    </div>
                    <div>
                        <label for="" class="form-label">Password</label>
                        <input type="password" name="password" id="" class="form-control">
                    </div>
                    <div class="mt-3">
                        <button name="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
    
@endsection