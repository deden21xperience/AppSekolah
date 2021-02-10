<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Document</title>
  <style>
    section {
      display: block;
      float: left;
      border: 2px solid green;
      min-height: 300px;
      width: 100%;
      border-radius: 4px;
    }

    a {
      display: block;
      float: left;
      width: 25%;
      text-decoration: none;
      text-align: center;
      padding: 5px 0;
      color: white;
      background: #1271C7;
    }

    div {
      display: block;
      float: left;
      height: 40px;
      width: 40px;
      border: 1px solid black;
      margin: 10px;
      -webkit-transition: all .8s linear;
      -moz-transition: all .8s linear;
      -o-transition: all .8s linear;
      -ms-transition: all .8s linear;
      transition: all .8s linear;
      margin-top: 20px;
    }

    div[data-filter="red"] {
      background: red;

    }

    div[data-filter="green"] {
      background: green;
    }

    div[data-filter="blue"] {
      background: blue;
    }



    a:focus[data-filter] {
      opacity: .8;
      outline: none;
    }

    a[data-filter="red"]:focus~div:not([data-filter="red"]) {
      height: 0px;
      width: 0px;
      border: none;
      margin: 0;
    }

    a[data-filter="green"]:focus~div:not([data-filter="green"]) {
      height: 0px;
      width: 0px;
      border: none;
      margin: 0;
    }

    a[data-filter="blue"]:focus~div:not([data-filter="blue"]) {
      height: 0px;
      width: 0px;
      border: none;
      margin: 0;
    }
  </style>
</head>

<body>
  <section>
    <a href="#" data-filter="all" tabindex="-1">ALL</a>
    <a href="#" data-filter="red" tabindex="-1">RED</a>
    <a href="#" data-filter="green" tabindex="-1">GREEN</a>
    <a href="#" data-filter="blue" tabindex="-1">BLUE</a>

    <div data-filter="red"></div>
    <div data-filter="blue"></div>
    <div data-filter="red"></div>
    <div data-filter="blue"></div>
    <div data-filter="green"></div>
    <div data-filter="red"></div>
    <div data-filter="red"></div>
    <div data-filter="red"></div>
    <div data-filter="blue"></div>
    <div data-filter="green"></div>
    <div data-filter="blue"></div>
    <div data-filter="green"></div>
    <div data-filter="green"></div>
  </section>

</body>

</html>