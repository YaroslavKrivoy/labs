<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>lab 3</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container main-content">
	<form action="action.php" method="post">

		<div class="row">  <!-- Первый столбец -->
			<div class="col-md-3 text-center">
				<div class="form-group">
					<label class="custom-label">
						<input type="file" id="files" name="photo" multiple />
						Загрузить фото
						<output id="list"></output>
					</label>
				</div>
			</div>

			<div class="col-md-4"> <!-- Второй столбец -->
				<div class="form-group">
				    <label>Фамилия</label>
				    <input type="text" class="form-control" name="Fam" placeholder="Введите вашу фамилию" required>
				</div>
				<div class="form-group">
    				<label>Имя</label>
    				<input type="text" class="form-control" name="Name" placeholder="Введите ваше имя" required>
  				</div>
  				<div class="form-group">
    				<label>Отчество</label>
    				<input type="text" class="form-control" name="Otch" placeholder="Введите ваше отчество" required>
  				</div>
  				<div class="form-group">
    				<label>Дата рождения</label>
    				<input type="date" class="form-control" name="birthDate" min="1900-01-01" max="2019-12-31" required>
  				</div>
  				<div class="form-row">
  					<div class="form-group col-md-6">
  					<label>Пол</label>
  					<select name="sex" class="custom-select" required>
	  					<option value="" hidden>Выбрать</option>
	  					<option value="male">Мужской</option>
	  					<option value="female">Женский</option>
					</select>
  				</div>
  				<div class="form-group col-md-6">
  					<label>Национальность</label>
					<select name="nation" class="custom-select" required>
						<option value="" hidden>Выбрать</option>
	  					<option value="rus">Русский</option>
	  					<option value="ukr">Украинец</option>
	  					<option value="bel">Белорус</option>
					</select>
				</div>
  				</div>
  				<div class="form-group textarea">
				    <label>Дополнительная информация о вас</label>
				    <textarea class="form-control" name="Textarea1" placeholder="Напишите что-то о себе" rows="4"></textarea>
				</div>
			</div>

			<div class="col-md-5">  <!-- Третий столбец -->
				<div class="form-group">
				    <label>Адрес</label>
				    <input type="text" class="form-control" name="Adres" placeholder="Введите ваш адрес" required>
				</div>
				<div class="form-group">
					<label>Мои увлечения</label>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" name="Check1">
			    		<label class="form-check-label">Программирование</label>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" name="Check2">
			    		<label class="form-check-label">Спорт</label>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" name="Check3">
			    		<label class="form-check-label">Книги</label>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" name="Check4">
			    		<label class="form-check-label">Путешествия</label>
					</div>
			  	</div>
			  	<div class="form-row">
			  		<div class="form-group col-md-6">
					    <label>E-mail</label>
					    <input type="email" class="form-control" name="Email" placeholder="name@example.com" required>
					</div>
					<div class="form-group  col-md-6">
					    <label>Skype</label>
					    <input type="text" class="form-control" name="Skype" placeholder="Введите ваш Skype" required>
					</div>
			  	</div>
			  	<div class="form-group">
					    <label>Телефон</label>
					    <input type="tel" class="form-control" name="Tel" placeholder="Введите ваш номер" required>
				</div>

				<div class="form-group">
					<label>Связываться со мной </label>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="Radios" value="phone">
					  <label class="form-check-label" for="exampleRadios1">
					    По телефону
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="Radios" value="email">
					  <label class="form-check-label" for="exampleRadios2">
					    По электронной почте
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="Radios" value="skype">
					  <label class="form-check-label" for="exampleRadios3">
					    Skype
					  </label>
					</div>
				</div>

				<div class="form-row">
					<label>Получать рассылку </label>
				<div class="btn-group btn-group-toggle col-md-6 col-sm-6" data-toggle="buttons">
				  <label class="btn btn-secondary btn-sm active">
				    <input type="radio"	 name="optionYes" autocomplete="off" checked> Да
				  </label>
				  <label class="btn btn-secondary btn-sm">
				    <input type="radio" name="optionNo" autocomplete="off"> Нет
				  </label>
				</div>
				</div>
				

			</div>
	  <div class="col-md-12 text-center final-buttons">
		  <button type="submit" class="btn-lg btn-success">Сохранить</button>
		  <button type="reset" class="btn-lg btn-danger">Сбросить</button>
	  </div>
	  </div>
	</form>
	<pre><?PHP include ("./data.txt")?></pre>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
  function handleFileSelect(evt) {
    let files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (let i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      let reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          let span = document.createElement('span');
          span.innerHTML = ['<img class="img-thumbnail" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
          document.getElementById('list').insertBefore(span, null);
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

  document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>
</body>
</html>
