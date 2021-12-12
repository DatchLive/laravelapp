<form action="/rest" method="post">
<table>
  @csrf
  <tr>
    <td>message: </td>
    <td><input type="text" name="message" value="{{old('message')}}"></td>  
  </tr>
  <tr>
    <td>url: </td>
    <td><input type="text" name="url" value="{{old('url')}}"></td>  
  </tr>
  <tr>
    <th></th>
    <td>
      <input type="submit" value="send">
    </td>
  </tr>
</table>
</form>