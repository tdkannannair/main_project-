tr>
 <form action='edit.php' method="post"> 
 <td><h3>country :</h3></td><td> <select>
        <?php 
            $r=mysqli_query($con,"SELECT * FROM `country`");
            while($row=mysqli_fetch_array($r))   
            {
              ?>
         <select class="c1" id="c1">
          <option value="<?php  echo $row ['cname']; ?>"><?php  echo $row ['cname']; ?></option>
            
          <?php
          }?>
           </select>
     </td>
    <td><h3>state :</h3> </td>
    <td><input type="text" name="name"><br></td>
     <td> <input type="submit" name="add" value="add"></td>
     
   </form>
     
  </tr>
 
  
<tr>
  <form action='state.php' method="post">
    <td><h3>country :</h3></td><td> 
         <select class="c2" id="c2">
             <option value="volvo">Volvo</option>
             <option value="saab">Saab</option>
             <option value="opel">Opel</option>
             <option value="audi">Audi</option>
             </select> 
    </td>
    <td><h3> state :</h3></td><td> 
        <select class="s1" id="s1">
              <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="opel">Opel</option>
              <option value="audi">Audi</option>
         </select>
     </td>

    <td> <h3>District :</h3> </td>
    <td><input type="text" name="name"><br></td>
    <td> <input type="submit" name="add" value="add">
  </form></td>
     
</tr> 
<tr>
 <form action='edit.php' method="post">
    <td><h3>country :</h3></td><td> 
        <select class="c3" id="c3">
          <option value="volvo">Volvo</option>
           <option value="saab">Saab</option>
          <option value="opel">Opel</option>
          <option value="audi">Audi</option>
        </select>
     </td>
     <td><h3>state :</h3></td><td> 
        <select class="s2" id="s3">
          <option value="volvo">Volvo</option>
           <option value="saab">Saab</option>
          <option value="opel">Opel</option>
          <option value="audi">Audi</option>
        </select>
     </td>
     <td><h3>district :</h3></td><td> 
        <select class="d1" id="d1">
          <option value="volvo">Volvo</option>
           <option value="saab">Saab</option>
          <option value="opel">Opel</option>
          <option value="audi">Audi</option>
        </select>
     </td>
     <td> <input type="submit" name="view" value="add"></td>
   </form>
     
  </tr>