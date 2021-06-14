<div>
    <form action="{{route('mostrar',$users)}}" method="post">
        @csrf

        <input type="hidden" name="userid">
        <input type="text" name="descripcion" placeholder="descripcion">

        <br>

        <label>
            <br>Subir imagen<br>
            <input type="file"
                   id="avatar" name="avatar"
                   accept="image/png, image/jpeg, video/mp4, video/x-m4v, video/*">
        </label>

        <br>

        <button type="submit">Compartir</button>
    </form>
</div>
