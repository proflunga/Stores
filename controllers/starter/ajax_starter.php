<form action="test2.php" id="form_name">

<input type="text" name="post_value" id="input_name1">
<input type="text" name="post_value2" id="input_name2">
<div id= "error_log" ></div>
<button type="submit" name="submit">submit</button>
</form>

<script>

document.getElementById('form_name').addEventListener('submit',fetch_funtion);

function fetch_funtion(e){
    e.preventDefault()

    var val1 = document.getElementById('input_name1').value;
    var val2 = document.getElementById('input_name2').value;
    
    var params = 'post_name1='+val1+'&post_name2='+val2;

    var xhr = new XMLHttpRequest();
    xhr.open('POST','test2.php',true);
    xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');

    xhr.onload = function (){
        var my_data = JSON.parse( this.responseText);
         //console.log(my_data.surname);
        // document.getElementById('error_log').innerHTML = my_data.name+' '+my_data.surname;

    }

    xhr.send(params);


    
}
</script>