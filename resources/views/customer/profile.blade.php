@extends('customer/layout')

@section('content')

<div class="container-fluid">
    <div class="row ">

        <div class="col-lg-3">

            <h3>Welcome User</h3>

            <div class="user_image">
                <img src="" alt="">
            </div>

        </div>
        <div class="col-lg-3 user_profile">
            <div>
                <a href=""><i class="fa-solid fa-box"></i>Order History</a>
            </div>
            <div>
                <a href="customer_profile/user_password"><i class="fa-regular fa-pen-to-square"></i>Change Password</a>

            </div>
            <div>
                <a href=""><i class="fa-solid fa-user-pen"></i>Manage Account</a>
            </div>

        </div>


    </div>
</div>


@endsection('content')