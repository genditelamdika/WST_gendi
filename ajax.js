function view(){
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function(){
    if(xhr.readyState === 4 && xhr.status === 200){
      document.getElementById('chat').innerHTML = xhr.responseText;
    }
  }
  xhr.open('GET','GetMahasiswa.php',true);
  xhr.send();
}
setInterval(function(){view()},1000);
//insert
function insert(){
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function(){
    if(xhr.readyState === 4 && xhr.status === 200){
      xhr.responseText;
    }
  }
  xhr.open('POST','insert.php',true);
  xhr.setRequestHeader("Content-type","wst_ajax");
  xhr.send('nama='+form1.chatname.value+'&isi='+form1.message.value);
  form1.chatname.value='';
  form1.message.value='';
  return false;
}
