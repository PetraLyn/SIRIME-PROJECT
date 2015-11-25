<table cellpadding="6" cellspacing="1" style="width:100%" border="0">
	
<tr>
    <th>name</th>
  <th >Price</th>
  
</tr>  


@foreach($data as $item)
<tr>
    <td>{{($item['name'])}}</td>
<td>{{($item['price'])}}</td>
</tr>


@endforeach

<tr>
  <td colspan="2"> </td>
</tr>

</table>
<FORM>
<input type="button" onClick="parent.location='info'" value='checkout'>
</FORM>





