@extends('template')
@section('content')
<div class="contentArchives">
    <h2>Archiwum</h2>
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">SEZON 1</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="{{asset('/ersGreen')}}">ERS GREEN</a>
            <a href="{{asset('/ersBlue')}}">ERS BLUE</a>
        </div>
    </div>
    <div class="dropdown">
        <button onclick="myFunction1()" class="dropbtn">SEZON 2</button>
        <div id="myDropdown1" class="dropdown-content">
            <a href="{{asset('/f1')}}">F1</a>
            <a href="{{asset('/f2')}}">F2</a>
            <a href="{{asset('/f3')}}">F3</a>
            <a href="{{asset('/f4')}}">F4</a>
        </div>
    </div>
    <div class="dropdown">
        <button onclick="myFunction2()" class="dropbtn">SEZON 3</button>
        <div id="myDropdown2" class="dropdown-content" >
            <a href="{{asset('/jeszczeNic')}}">Jeszcze nic</a>

        </div>
    </div>

    <script>

        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
        function myFunction1() {
            document.getElementById("myDropdown1").classList.toggle("show");
        }
        function myFunction2() {
            document.getElementById("myDropdown2").classList.toggle("show");
        }
        </script>
</div>
@stop
