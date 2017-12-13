@extends('layouts.master')

@section('content')

<form class="reservation-form gradient-gold">

                <div class="input-form">
                    <label for="check_in">Llegada:</label>
                    <input type="text" name="check_in" id="check_in">
                </div>

                <div class="input-form">
                    <label for="check_out">Salida:</label>
                    <input type="text" name="check_out" id="check_out">
                </div>

                <div class="input-form">
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name">
                </div>

                <div class="input-form">
                    <label for="email">Correo electronico:</label>    
                    <input type="text" name="email" id="email">
                </div>

                <div class="input-form">
                    <label for="quantity">Personas:</label>
                    <input type="number" name="quantity" id="quantity">
                </div>

                <div class="input-form">
                    <label for="comment">Comentarios:</label>
                    <textarea  name="comment" id="comment" rows="3"></textarea>
                </div>

                <div class="gradient-gold btn-form text-center pointer box-sizing">Reservar</div>
            </form>

@stop



