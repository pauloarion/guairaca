<div class="input-field">
    <input type="text" name="name" value="{{isset($registro->name) ? $registro->name : ''}}">
    <label>Nome</label>
</div>
  
<div class="input-field">
  <input type="text" name="surname" value="{{isset($registro->surname) ? $registro->surname : ''}}">
  <label>Sobrenome</label>
</div>

<div class="input-field">
  <input type="text" name="cpf" value="{{isset($registro->cpf) ? $registro->cpf : ''}}">
  <label>CPF</label>
</div>

<div class="input-field">
  <input type="text" name="email" value="{{isset($registro->email) ? $registro->email : ''}}">
  <label>E-mail</label>
</div>

<div class="input-field">
  <input type="text" name="phone" value="{{isset($registro->phone) ? $registro->phone : ''}}">
  <label>Telefone</label>
</div>

<div class="input-field">
  <input type="text" class="datepicker" name="birthday" value="{{isset($registro->birthday) ? $registro->birthday : ''}}">
  <label>Aniversário</label>
</div>
