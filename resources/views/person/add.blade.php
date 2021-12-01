@extends('layouts.helloapp')

@section('title', 'Person.Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
  @if (count($errors) > 0)
  <div>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <form action="/person/add" method="post">
    <table>
      @csrf
      <tr>
        <th>name: </th>
        <td><input type="text" name="name" value="{{$form->name}}"></td>
      </tr>
      <tr>
        <th>mail: </th>
        <td><input type="text" name="mail" value="{{$form->mail}}"></td>
      </tr>
      <tr>
        <th>age: </th>
        <td><input type="text" name="age" value="{{$form->age}}"></td>
      </tr>
      <tr>
        <th></th>
        <input type="submit" value="send">
      </tr>
    </table>
  </form>  
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection