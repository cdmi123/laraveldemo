<form id="#image_upload">
    <table>
        <tr>
            <td>name</td>
            <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="button" name="save" id="name"></td>
        </tr>
        <a href="javascript:void(0)">delete</a>
    </table>
</form>
<script type="text/javascript" src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript">
   $(document).ready(function(){
        $('#image_upload').submit(function(e){
            e.preventDefault();
            var formdata = new FormData(this);

            $.ajax({
                type:'POST',
                url:"{{url('ajax')}}",
                data:formdata,
                success:function(res)
                {
                    $('#dis').html(res);
                }
            })
        })
    })
</script>