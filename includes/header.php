<div class="row">
  <div class="col-md-4">
    <form action="includes/views.php">
        <label for="formGroupExampleInput">Введите ваш API-key</label>
        <input name="api" type="search" class="form-control" required="" placeholder="Enter API-key">
        <label for="formGroupExampleInput2">Введите ID компании</label>
        <input name="id" type="search" class="form-control" required="" placeholder="Enter Place ID">
        <br>
        <button type="submit" class="btn btn-success">Найти</button>
    </form>
    <a href="<?php echo $config['place-id-finder']?>" target="_blank">Если Вы не знаете ID компании, нажмите сюда!</a>
  </div>
</div>
<hr>