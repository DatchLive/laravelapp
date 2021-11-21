@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
<table>
  <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
  @foreach ($items as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>{{$item->mail}}</td>
      <td>{{$item->age}}</td>
    </tr>
  @endforeach
  </table>
@endsection
      {{-- @error('name')
        <tr>
          <th>ERROR</th>
          <td>{{$message}}</td>
        </tr>
      @enderror
      <tr>
        <th>
          name:
        </th>
        <td>
          <input type="text" name="name" value="{{old('name')}}">
        </td>
      </tr>
      @error('mail')
        <tr>
          <th>ERROR</th>
          <td>{{$message}}</td>
        </tr>
      @enderror
      <tr>
        <th>
          mail:
        </th>
        <td>
          <input type="text" name="mail" value="{{old('mail')}}" >
        </td>
      </tr>
      @error('age')
      <tr>
        <th>ERROR</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th>
          age:
        </th>
        <td>
          <input type="text" name="age" value="{{old('age')}}" >
        </td>
      </tr>
      <tr>
        <th>
        </th>
        <td>
          <input type="submit" value="send">
        </td>
      </tr> --}}

@section('footer')
copyright 2019 tuyano.
@endsection