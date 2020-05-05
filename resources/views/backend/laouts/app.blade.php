<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
      @include('backend.partials.css')

</head>

<body class="theme-red">
<div id="app">
    @include('backend.partials.navbar')
    @include('backend.partials.sidebar')
    <router-view></router-view>
</div>

  @include('backend.partials.js')
<style>
    .router-link-active{
        background: #f4f4f4;

    }
</style>
</body>
