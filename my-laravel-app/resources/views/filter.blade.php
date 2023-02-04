
<title>
Filter
</title>
<style>

h4{
background-color: lightgrey;
text-align: center;
position: sticky;
padding: 10px;
font-size: 20px;
box-shadow: 1px 2px 3px('red');
}
input{
border: none;
padding :20px;
outline: none;
background-color: grey;
border-radius:  10px;
font-size: 20px;
}

input::placeholder{
color: black;
}
table{
border: 1px solid black;
border-collapse: collapse;

}
th{
border: 1px solid black;
}
td{
border: 1px solid black;
}

td:hover{
background: red;
cursor: pointer;
color: white;
}


.id:hover{
background: green;
cursor: pointer;
color: white;
}

.name:hover{
background: lightgrey;
cursor: pointer;
color: white;
}

</style>
<h4>Search && Filter Bar</h4>

<input name="" type='text' id='myInput' placeholder='names...' onkeyup="searchFun()">
<table class="center" id='myTable'>
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Address</th>
</tr>
</thead>

<tbody>
    <tr>
      <td class='id'>1</td>
      <td class='name'>Reshu</td>
      <td>Gwalior</td>
    </tr>
       <tr>
          <td class='id'>2</td>
          <td class='name'>Renu</td>
          <td>Satna</td>
        </tr>
           <tr>
              <td class='id'>3</td>
              <td class='name'>Reshma</td>
              <td>Satna</td>
            </tr>

               <tr>
                  <td class='id'>4</td>
                  <td class='name'>Mahi</td>
                  <td>Gwalior</td>
                </tr>

                   <tr>
                      <td class='id'>5</td>
                      <td class='name'>Rich</td>
                      <td>GA</td>
                    </tr>
                    </tbody>
 <script>
// alert('hello')

const searchFun = () => {
let filter = document.getElementById('myInput').value.toUpperCase();
let mytable= document.getElementById('myTable');
let tr = mytable.getElementsByTagName('tr');
for(var i = 0; i < tr.length; i++){
let td = tr[i].getElementsByTagName('td')[0];
if(td){
let textvalue = td.textContent || td.innerHtml;
if(textvalue.toUpperCase().indexOf(filter) > -1 ){
tr[i].style.display = "";
}else{
tr[i].style.display = "none";
}
}
}
}
</script>
  </tbody>
</table>



