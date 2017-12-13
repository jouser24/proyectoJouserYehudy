<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/careers/" method="post" >
    {{ csrf_field() }}
    
   
    <input type="text" name="name" placeholder="Name">
    <textarea name="descripcion" cols="30" rows="10" placeholder="descripcion"></textarea>

    <select name=courses[] placeholder="Seleccione cursos" multiple>
    @forelse ($courses as $course)
        <option value="{{$course ->id}}">{{$course -> name}}</option>
        
    @empty
    <option value="0">No courses available</option>
    @endforelse
</select>
      <button type="submit">Crear</button>



    </form>
</body>
</html>