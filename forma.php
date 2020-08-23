<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Wеb 3</title>
        <link rel="stylesheet" href="style.css">
      </head>
    <body>
        <form action="" method="POST">

            <label>
              Имя:<br />
              <input name="Name" type="text" />
            </label><br />
        
            <label>
              e-mail:<br />
              <input name="EMail" type="text" />
            </label><br />
            
            <label>
              Год рождения:<br />
              <input name="Year"  type="text" />
            </label><br />
        
            Пол:<br />
            <label><input type="radio" checked="checked" name="Sex" value="Male" /> Мужской </label>
            <label><input type="radio"  name="Sex" value="Female" /> Женский </label>
            <br />
            Количество конечностей:<br />
            <label><input type="radio"  name="KolKon" value="0" /> 0 </label>
            <label><input type="radio"  name="KolKon" value="1" /> 1 </label>
            <label><input type="radio" checked="checked" name="KolKon" value="2" /> 2 </label> 
            <label><input type="radio"  name="KolKon" value="3" /> 3 </label><br />
        
            <label> Способности:<br />
              <select name="Sposobnosti[]" multiple="">
                <option>Ability to create a Rasengan</option>
                <option>Running speed is greater than that of Sonic</option>
                <option>Ability to split fire</option>
                <option>Learning to teleport</option>
                <option>Invisibility</option>
                <option>One-Punch Man</option>
              </select>
            </label><br />
            
            <label> Биография:<br />
              <textarea name="Biog"></textarea>
            </label><br />
        
            <br />
            <label><input type="checkbox" checked="" name="Checkbox" value="Yes"> С контрактом ознакомлен </label><br /> 
            
            <input type="submit" value="Отправить" />
        
          </form>
    </body>    


</html>