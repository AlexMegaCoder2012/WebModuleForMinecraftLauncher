<?php
	//Обращение к API
		// ID нашего сообщества или страницы вконтакте
		$wall_id="-183309854";
		// Удаляем минус у ID групп, что мы используем выше (понадобится для ссылки).
		$group_id = preg_replace("/-/i", "", $wall_id);
		// Количество записей, которое нам нужно получить.
		$count = "100";
		// Токен
		$token = "access_token";
		// Получаем информацию, подставив все данные выше.
		$api = file_get_contents("https://api.vk.com/api.php?oauth=1&method=wall.get&owner_id={$wall_id}&count={$count}&v=5.124&filter=owner&access_token={$token}");
	
		// Преобразуем JSON-строку в массив
		$wall = json_decode($api);
		//var_dump($wall);
		 
		// Получаем массив
		$wall = $wall->response->items;
?>