<?php include 'header.html' ?>
<!-- ██████████████████████████████████████████████████████████████████████████████████████ -->



<h1>System credentials <i class="fas fa-search"> <i class="fas fa-edit"></i></h1></i> <!-- Ajuda o google a encontrar a pagin. o titolo do livro. Somente um H1 deve ter por pagina -->

<form action="php/create_human_C.php" method="post" enctype="multipart/form-data"> <!-- Usar o GET para teste pois os dados mandados sao visualizados. Com o post esses dados sao escondidos. Upload de files deve ser feito via POST -->
    
<label>
        Record <br>
        <input class="auto" type="text" name="name" value="290347348450" disabled>
    </label>
    <label>
        Name <br>
        <input class= "must" type="text" name="name" required>
    </label>
       <label>
        Surname <br>
        <input type="text" name="surname" id="must">
    </label>
    <label>
        Email <br>
        <input type="email" name="login">
    </label>
    <label>
        Username <br>
        <input type="text" name="user">
    </label>
    <label>
        Password <br>
        <input type="password" name="password">
    </label>
      <label>
        Likelihood <br>
        <select name="likelihood" id="">
        <option value="1">Extremely improbable</option>
        <option value="2">Improbable</option>
        <option value="3">Remote</option>
        <option value="4">Ocasional</option>
        <option value="5">Frequent</option>
        </select>
    </label>
    <label>
        Severity <br>
        <select name="Severity" id="">
        <option value="E">Negligable</option>
        <option value="D">Minor</option>
        <option value="C">Major</option>
        <option value="B">Harzadous</option>
        <option value="A">Catastrophic</option>
        </select>
    </label>
<div>
    <table>
        <caption>Risk matrix</caption>
    <tbody>
    <tr>
        <td style="background-color:white"></td>
        <td style="background-color:grey">Catastrophic</td>
        <td style="background-color:grey">Hazardous</td>
        <td style="background-color:grey">Major</td>
        <td style="background-color:grey">Minor</td>
        <td style="background-color:grey">Negligible</td>
        </tr>
        <tr>
        <td style="background-color:grey">Frequent</td>
        <td style="background-color:red">5A</td>
        <td style="background-color:red">5B</td>
        <td style="background-color:red">5C</td>
        <td style="background-color:yellow">5D</td>
        <td style="background-color:yellow">5E</td>
        </tr>
        <tr>
        <td style="background-color:grey">Occasional</td>
        <td style="background-color:red">4A</td>
        <td style="background-color:red">4B</td>
        <td style="background-color:yellow">4C</td>
        <td style="background-color:yellow">4D</td>
        <td style="background-color:yellow">4E</td>
        </tr>
        <tr>
        <td style="background-color:grey">Remote</td>
        <td style="background-color:red">3A</td>
        <td style="background-color:yellow">3B</td>
        <td style="background-color:yellow">3C</td>
        <td style="background-color:yellow">3D</td>
        <td style="background-color:green">3E</td>
        </tr>
        <tr>
        <td style="background-color:grey">Improbable</td>
        <td style="background-color:yellow">2A</td>
        <td style="background-color:yellow">2B</td>
        <td style="background-color:yellow">2C</td>
        <td style="background-color:green">2D</td>
        <td style="background-color:green">2E</td>
        </tr>
        <tr>
        <td style="background-color:grey">Extremely improbable</td>
        <td style="background-color:green">1A</td>
        <td style="background-color:green">1B</td>
        <td style="background-color:green">1C</td>
        <td style="background-color:green">1D</td>
        <td style="background-color:green">1E</td>
        </tr>
    </tbody>
    </table>
</div>
    <label>
        Signature (NULL) <br>
        <input type="file" name="signature">
    </label>
    <label>
        Birthday <!-- This must be supported by a date function like in AMOS --> <br>
        <input type="date" name="birthdate">
    </label>
    <label>
        Time <!-- This must be supported by a date function like in AMOS --> <br>
        <input type="time" name="time">
    </label>
    <label>
        Level <br>
        <input type="text" name="level">
    </label>
    <label>
        Status <br>
        <input type="text" name="status">
    </label>

    <form action="php/upload_servidor.php" method="post"enctype="multipart/form-data">
<input type="file"  name="arquivo">
<button>send</button>

    
    <button type="submit" class="send">Send</button>
    <button type="submit" class="change">Change</button>
    <button type="submit" class="deactivate">Deactivate</button>
    <button type="submit" class="delete">Delete</button>
</form>
</form>

<?php include 'footer.html' ?>