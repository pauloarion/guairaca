<div class="row">
  <div class="input-field col s4">
    <input type="text" name="name" value="{{isset($registro->name) ? $registro->name : ''}}">
    <label>Nome</label>
  </div>

  <div class="input-field col s4">
    <select name="airline">
      @foreach($airlines as $line)
      <option value="{{$line['key']}}" {{ !isset($registro->airline) ? '' : ($registro->airline == $line['key'] ? 'selected' : '') }}>{{$line['value']}}</option>
      @endforeach
    </select>
    <label>Companhia Aérea</label>
  </div>

  <p>
    <label class="input-field col s4">
      <input type="checkbox" name="active" value="1" {{ !isset($registro->active) ? '' : ($registro->active ? 'checked="checked"' : '') }} />
      <span>Ativo</span>
    </label>
  </p>
</div>

<div class="row">
  <div class="input-field col s3">
    <input type="text" class="datepicker" name="departure_date" value="{{isset($registro->departure_date) ? $registro->departure_date : ''}}">
    <label>Data da decolagem:</label>
  </div>

  <div class="input-field col s3">
    <input type="text" class="timepicker" name="departure_time" value="{{isset($registro->departure_time) ? $registro->departure_time : ''}}">
    <label>Horário da decolagem:</label>
  </div>

  <div class="input-field col s3">
    <input type="number" name="duration" value="{{isset($registro->duration) ? $registro->duration : ''}}">
    <label>Duração do voo em horas</label>
  </div>
</div>

<div class="row">
  <div class="input-field col s4">
    <select name="from_id">
      @foreach($from_list as $from)
      <option value="{{$from->id}}" {{  !isset($registro->from_id) ? '' : ($registro->from_id == $from->id ? 'selected' : '') }}>{{$from->name}}</option>
      @endforeach
    </select>
    <label>Origem</label>
  </div>

  <div class="input-field col s4">
    <select name="to_id">
      @foreach($to_list as $to)
      <option value="{{$to->id}}" {{  !isset($registro->to_id) ? '' : ($registro->to_id == $to->id ? 'selected' : '') }}>{{$to->name}}</option>
      @endforeach
    </select>
    <label>Destino</label>
  </div>
</div>