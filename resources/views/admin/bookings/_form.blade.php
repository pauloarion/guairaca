<div class="row">
  <div class="input-field col s4">
    <select name="passenger_id">
      @foreach($passengers as $passenger)
      <option value="{{$passenger->id}}" {{ !isset($registro->passenger_id) ? '' : ($registro->passenger_id == $passenger->id ? 'selected' : '') }}>{{$passenger->name}} {{$passenger->surname}}</option>
      @endforeach
    </select>
    <label>Passageiro</label>
  </div>
</div>

<div class="row">
  <div class="input-field col s4">
    <select name="flight_id">
      @foreach($flights as $flight)
      <option value="{{$flight->id}}" {{ !isset($registro->flight_id) ? '' : ($registro->flight_id == $flight->id ? 'selected' : '') }}>{{$flight->name}}</option>
      @endforeach
    </select>
    <label>Voo</label>
  </div>
</div>

<div class="row">

  <div class="input-field col s4">
    <select name="kind">
      @foreach($kinds as $line)
      <option value="{{$line['key']}}" {{ !isset($registro->kind) ? '' : ($registro->kind == $line['key'] ? 'selected' : '') }}>{{$line['value']}}</option>
      @endforeach
    </select>
    <label>Companhia Aérea</label>
  </div>

</div>