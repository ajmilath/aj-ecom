
@extends('common/layout')

@section('css')
@endsection

@section('content')


<!-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
         /* .container1{
            height: 400px;
            width: 800px;
             background-color: red; 
        } 
        .buttn{
            position: relative;
            top: 400px;
        }
        .b1{
            left: 0px;
        }
        .b2{
            left: 500px;
        } */
    </style> 
</head>

<body> -->
<link rel="stylesheet" type="text/css" href="{{asset('/css/ind.css')}}">

    <div class="container1 mt-5">
        
       <a href="customer_login"> <button type="button" class="btn btn-warning bottn b1" >CUSTOMER</button></a>
        <a href="seller_login"><button type="button" class="btn btn-warning bottn b2">SELLER</button></a>

    </div>
    @endsection
   