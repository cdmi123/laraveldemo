<form id="frm">
	@CSRF
<select id="get_data" name="data_cat">
	<option selected="" disabled="">select category</option>
	<option value="hello1">hello1</option>
	<option value="hello2">hello2</option>
	<option value="hello3">hello3</option>
	<option value="hello4">hello4</option>
</select>
<input type="text" name="name">
<input type="submit" name="save" value="save">
</form>

<select id="res_data">
    <option selected="" disabled="">select category</option>
</select>


<script type="text/javascript" src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript">
   $(document).ready(function(){
        $('#frm').submit(function(e){
            e.preventDefault();
         //var get_data1 = $(this).val();

         var frm_data = $(this).serialize();
            $.ajax({
                type:'POST',
                url:"{{url('ajax_data')}}",
                //data:{'get_data_valu':get_data1,'_token':'{{csrf_token()}}'},
                data:frm_data,
                success:function(res)
                {
                    $('#res_data').html(res);
                }
            })
        })
    })
</script>
