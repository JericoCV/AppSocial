
<div style="background: white">
        <form action="{{route('mostrar',$users)}}" method="post" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="userid">
            <input type="text" name="descripcion" placeholder="Que estas pensando?"style=" width: 400px; height: 25px;border-radius: 6px 6px">

            <br>
            <label>
                Subir imagen<br>
            <input type="file"
                   name="imagen" style="color: transparent"
                   accept="image/png, image/jpeg, video/mp4, video/x-m4v, video/*" onchange="loadFile(event)">
            </label>
            <img id="output" style="max-height: 300px"/>

            <br>

            <button type="submit">Compartir</button>
        </form>
    </div>

