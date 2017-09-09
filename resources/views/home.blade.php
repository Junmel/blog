@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <marquee behavior = "scroll" direction = "left" scrollamount = "" >
                      <left style = "color: green; font-size: 20px;">- You are logged in! -</left>
                    </marquee>
                  


                    <pre>
                        <?php
                            print_r(\Auth::user()->ToArray());
                        ?>
                    </pre>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
