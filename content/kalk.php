<h1>Valuuta kalkulaator var 1</h1>

<form name="var1">
    <label for="kogus">Sisesta kogus:</label>

    <input type="number" name="kogus" id="kogus"> euro
    <br>
    <fieldset>
        <legend>Vali valuuta:</legend>

        <input type="radio" name="valuuta1" id="dollar" value="dollar" onchange="radiochange(event)">
        <label for="dollar">Dollar</label>
        <br>
        <input type="radio" name="valuuta1" id="rub" value="rub" onchange="radiochange(event)">
        <label for="rub">Rouble</label>
        <br>
        <input type="radio" name="valuuta1" id="kroon" value="kroon" onchange="radiochange(event)">
        <label for="kroon">Rootsi Kroon</label>
        <br>
        <input type="radio" name="valuuta1" id="frank" value="frank" onchange="radiochange(event)">
        <label for="frank">Sveitsi Frank</label>
        <br>

    </fieldset>
    <div id="vastus">Siia tuleb vastus..</div>

</form>
<!--<img src="pust.png" alt="pilt" id="pilt">-->
<h1>Valuuta kalkulaator var 2</h1>

<form name="var2">

    <label for="kogus2">Sisesta kogus:</label>
    <input type="number" name="kogus2" id="kogus2"> euro
    <br><br>
    <select name="valuuta2" onchange="selectOptionchange(event)">
        <option value=""></option>
        <option value="dollar">Dollar</option>
        <option value="kroon">Rootsi Kroon</option>
        <option value="frank">Sveitsi Frank</option>
        <option value="rub">Rouble</option>
    </select>
    <div id="vastus2">Siia tuleb vastus..</div>

</form>

<h1>Valuuta kalkulaator var 3</h1>

<form name="var3">
    <label for="kogus3">Sisesta kogus:</label>
    <input type="number" name="kogus3" id="kogus3"> euro
    <br><br>

    <label for="valuutanimi">Sisesta valuuta(dollar, rouble, frank, kroon)</label>
    <input type="text" name="valuutanimi" id="valuutanimi" placeholder="Valuuta nimetus" >
    <input type="button" onclick="inputValutaText()" value="OK">
    <div id="vastus3">Siia tuleb vastus..</div>
</form>

<h1>Aega kalkulaator var 4</h1>

<form name="var4">
    <label for="kogus4">Sisesta minutid:</label>
    <input type="number" name="kogus4" id="kogus4">
    <br><br>
    <select name="valuutanimi" onchange="selectOptionchange(event)">
        <!--<input type="text" name="valuutanimi" id="valuutanimi" placeholder="tähtsus" >
        <input type="button" onclick="inputText()" value="OK">
        <div id="vastus4">Siia tuleb vastus..</div>-->
        <option value=""></option>
        <option value="sekundid">Sekundid</option>
        <option value="tund">Tund</option>
        <option value="paev">Päev</option>
        <option value="millisekund">Millisekund</option>
        <option value="kuu">Kuu</option>

    </select>
    <div id="vastus4">Siia tuleb vastus..</div>

</form>

