


  <table class="table table-bordered">
    <thead class="thead-inverse">
      <tr>
        <th>#</th>
        <th>Dependencia</th>

      </tr>
    </thead>

    <input type="hidden" name="button" value="{{$i=0}}"></input>

    <tbody>
      @foreach ($clients as $info)
        <tr>
          <th>{{++$i}}</th>
          <td>{{$info->Nombre}}</td>

        </tr>
      @endforeach
    </tbody>
  </table>
